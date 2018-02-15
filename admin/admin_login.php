<?php
require_once('phpscripts/config.php');
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username !== "" && $password !== "") {
        $result  = logIn($username, $password, $ip);
        $message = $result;
    } else {
        $message = "Please fill out the required field";
    }
};
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Welcome to your login</title>
</head>
<body>
<?php if (!empty($message)) {
    echo $message;
} ?>
<form action="admin_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username">

    <label for="password">Password:</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="show me the money">
</form>

</body>
</html>
