<?php
function logIn($username, $password, $ipAddress)
{
    require_once('connection.php');

    $username    = mysqli_real_escape_string($connect, $username);
    $password    = mysqli_real_escape_string($connect, $password);
    $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
    $user_set    = mysqli_query($connect, $loginstring);

    if (mysqli_num_rows($user_set)) {
        $finduser              = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
        $id                    = $finduser['user_id'];
        $_SESSION['user_id']   = $id;
        $_SESSION['user_name'] = $finduser['user_fname'];
        if (mysqli_query($connect, $loginstring)) {
            $update      = "UPDATE tbl_user SET user_ip='{$ipAddress}' WHERE user_id={$id}";
            $updateQuery = mysqli_query($connect, $update);
        }
        redirect_to("admin_index.php");
    } else {
        $message = "Cannot find user!";

        return $message;
    }

    mysqli_close($connect);
}