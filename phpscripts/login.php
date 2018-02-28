<?php
function logIn($username, $password, $ipAddress, $currentDate) {
    require_once('connection.php');

    $username = mysqli_real_escape_string($connect, $username);

    if ($username === "admin") {
        $password = mysqli_real_escape_string($connect, $password);
    } else {
        $password = md5(mysqli_real_escape_string($connect, $password));
    }

    $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
    $user_set    = mysqli_query($connect, $loginstring);

    $fetchResult           = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
    $_SESSION['user_date'] = $fetchResult['user_date'];

    if (mysqli_num_rows($user_set)) {
        $id                    = $fetchResult['user_id'];
        $_SESSION['user_id']   = $id;
        $_SESSION['user_name'] = $fetchResult['user_fname'];

        $s         = 86400;//24 hrs to seconds
        $time_diff = time() - strtotime($fetchResult['user_date']);

        if ($fetchResult['user_ip'] === "no") {
            if ($time_diff < $s) {
                if (mysqli_query($connect, $loginstring)) {
                    $update      = "UPDATE tbl_user SET user_ip='{$ipAddress}', user_date='{$currentDate}' WHERE user_id={$id}";
                    $updateQuery = mysqli_query($connect, $update);
                }
                redirect_to("edit_user.php");
            } else {
                $suspendedMsg = "Your account has been suspended because you have not login the system within 24 hours.";

                return $suspendedMsg;
            }
        } else {
            if (mysqli_query($connect, $loginstring)) {
                $update      = "UPDATE tbl_user SET user_ip='{$ipAddress}', user_date='{$currentDate}' WHERE user_id={$id}";
                $updateQuery = mysqli_query($connect, $update);
            }
            redirect_to("welcome.php");
        }
    } else {
        $message = "Cannot find user!";

        return $message;
    }

    mysqli_close($connect);
}