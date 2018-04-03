<?php
function createUser($fname, $username, $password, $email, $lvllist) {
    include('connection.php');

    $unencryptedPas = $password;
    $password       = md5($password);
    $userstring     = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$lvllist}', 'no')";
    $userquery      = mysqli_query($connect, $userstring);

    if ($userquery) {
        $to      = $email;
        $subject = "Welcome to Shan CMS!";
        $content = "Hello " . $fname . "! You have successfully signed up for Shan CMS. Please log in on http://localhost. Your username is " . $username . " and your default password is " . $unencryptedPas . ". Please enjoy :)";

        mail($to, $subject, $content);

        redirect_to('index.php');
    } else {
        $message = "Oops! Something went wrong.";

        return $message;
    }
    mysqli_close($connect);
}

function editUser($fname, $username, $password, $email, $id) {
    include('connection.php');
    $updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_name='{$username}', user_pass='{$password}', user_email='{$email}' WHERE user_id={$id}";
    $updatequery  = mysqli_query($connect, $updatestring);
    if ($updatequery) {
        redirect_to("index.php");
    } else {
        $message = "Wrong! Wrong! Wrong!";
        return $message;
    }
    mysqli_close($connect);
}

function deleteUser($id) {
    include('connection.php');
    $delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
    $delquery  = mysqli_query($connect, $delstring);
    if ($delquery) {
        redirect_to("../index.php");
    } else {
        $message = "Something went wrong!";
        return $message;
    }
    mysqli_close($connect);
}