<?php
require_once('phpscripts/config.php');
confirmLogin();

if (isset($_POST['submit'])) {
    $fname    = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email    = trim($_POST['email']);
    $lvllist  = $_POST['lvllist'];

    if (empty($lvllist)) {
        $message = "Please select a user level.";
    } else {
        $result  = createUser($fname, $username, $password, $email, $lvllist);
        $message = $result;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Create user</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Create user</h2>
    <?php if (!empty($message)) {
        echo $message;
    } ?>
    <div class="info-wrap create-user">
        <form action="create_user.php" method="post">
            <div class="input-wrap">
                <label for="">First Name</label>
                <br>
                <input type="text" name="fname">
            </div>
            <div class="input-wrap">
                <label for="">Username</label>
                <br>
                <input type="text" name="username">
            </div>
            <div class="input-wrap">
                <label for="">Password</label>
                <br>
                <input type="text" name="password" class="pasInput">
                <span class="genPasClick">Generate password</span>
                <span class="genPasField"></span>
            </div>
            <div class="input-wrap">
                <label for="">Email</label>
                <br>
                <input type="email" name="email">
            </div>
            <div class="input-wrap">
                <select name="lvllist">
                    <option value="">Select User Level</option>
                    <option value="2">Web Admin</option>
                    <option value="1">Web Master</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Create user" class="create-submit">
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/gen_pas.js"></script>
</body>
</html>
