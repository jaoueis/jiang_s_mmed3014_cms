<?php
require_once('phpscripts/config.php');
confirmLogin();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Welcome</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Account</h2>
    <div class="info-wrap">
        <a href="edit_user.php" class="account-anchor">Edit account information</a>
        <br><br>
        <a href="delete_user.php" class="account-anchor">Terminate account</a>
    </div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
