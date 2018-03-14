<?php
function logIn($username, $password, $ipAddress, $currentDate) {
    require_once('connection.php');

    $username = mysqli_real_escape_string($connect, $username);

    if ($username == "admin") {
        $password = mysqli_real_escape_string($connect, $password);
    } else {
        $password = md5(mysqli_real_escape_string($connect, $password));
    }

    $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}'";
    $user_set    = mysqli_query($connect, $loginstring);
    $fetchResult = mysqli_fetch_array($user_set, MYSQLI_ASSOC);

    if ($fetchResult != null) {
        $loginstring           = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
        $user_set              = mysqli_query($connect, $loginstring);
        $fetchResult           = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
        $_SESSION['user_date'] = $fetchResult['user_date'];
    } else {
        $message = "<span>Cannot find user.</span>";

        return $message;
    }

    if ($fetchResult != null) {
        if (mysqli_num_rows($user_set) == 1) {
            $id                    = $fetchResult['user_id'];
            $_SESSION['user_id']   = $id;
            $_SESSION['user_name'] = $fetchResult['user_fname'];
            $s                     = 86400;//24 hrs to seconds
            $time_diff             = time() - strtotime($fetchResult['user_date']);
            if ($fetchResult['user_attempts'] + 1 == 3) {
                $message = "<span>Your account has been locked down. Please contact admin by email jiang_shan@live.com to unlock the account.</span>";

                return $message;
            } else {
                if ($fetchResult['user_ip'] == "no") {
                    if ($time_diff < $s) {
                        if (mysqli_query($connect, $loginstring)) {
                            $update      = "UPDATE tbl_user SET user_ip='{$ipAddress}', user_date='{$currentDate}', user_attempts='0' WHERE user_id={$id}";
                            $updateQuery = mysqli_query($connect, $update);
                        }
                        redirect_to("edit_user.php");
                    } else {
                        $suspendedMsg = "<span>Your account has been suspended because you have not login the system within 24 hours.</span>";

                        return $suspendedMsg;
                    }
                } else {
                    if (mysqli_query($connect, $loginstring)) {
                        $update      = "UPDATE tbl_user SET user_ip='{$ipAddress}', user_date='{$currentDate}', user_attempts='0' WHERE user_id={$id}";
                        $updateQuery = mysqli_query($connect, $update);
                    }
                    redirect_to("welcome.php");
                }
            }
        } else {
            $message = "<span>Whoops! Something went wrong :(</span>";

            return $message;
        }
    } else {
        $loginstring  = "SELECT * FROM tbl_user WHERE user_name='{$username}'";
        $user_set     = mysqli_query($connect, $loginstring);
        $fetchResult  = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
        $userAttempts = $fetchResult['user_attempts'] + 1;

        if ($userAttempts >= 3) {
            $message = "<span>Your account has been locked down. Please contact admin by email jiang_shan@live.com to unlock the account.</span>";

            return $message;
        }

        $attemptsLeft = 3 - $fetchResult['user_attempts'] - 1;
        $message      = "<span>Your password is incorrect. Please try again. " . "You have " . $attemptsLeft . " attempts left.</span>";
        $update       = "UPDATE tbl_user SET user_attempts='{$userAttempts}' WHERE user_name='{$username}'";
        $updateQuery  = mysqli_query($connect, $update);

        return $message;
    }
    mysqli_close($connect);
}