<?php
require_once('phpscripts/config.php');

date_default_timezone_set('America/Toronto');

$ipAddress   = $_SERVER['REMOTE_ADDR'];
$currentDate = date("Y-m-d H:i:s");

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username !== "" && $password !== "") {
        $result  = logIn($username, $password, $ipAddress, $currentDate);
        $message = $result;
    } else {
        $message = "<span>Please fill out the required field.</span>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Log In</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main-wrap">
    <div class="msg-wrap">
        <?php if (!empty($message)) {
            echo $message;
        } ?>
    </div>

    <div class="form-wrap">
        <img src="images/shan-logo-3.0-name.svg" alt="Logo">
        <form action="index.php" method="post">
            <div class="inputBox-wrap">
                <label for="username">Username*</label>
                <br>
                <input type="text" name="username">

                <label for="password">Password*</label>
                <br>
                <input type="password" name="password">
                <span>* is required</span>
            </div>
            <input type="submit" name="submit" value="Log In">
        </form>
    </div>
</div>
</body>
</html>
