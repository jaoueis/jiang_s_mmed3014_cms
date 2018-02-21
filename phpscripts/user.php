<?php
function createUser($fname, $username, $password, $email, $lvllist) {
    include('connection.php');

    $userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$lvllist}', 'no')";
    $userquery  = mysqli_query($connect, $userstring);

    if ($userquery) {
        redirect_to('index.php');
    } else {
        $message = "Failed";

        return $message;
    }
    mysqli_close($connect);
}