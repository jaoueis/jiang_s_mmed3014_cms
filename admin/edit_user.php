<?php
require_once('phpscripts/config.php');
confirmLogin();

$id      = $_SESSION['user_id'];
$tbl     = "tbl_user";
$col     = "user_id";
$popForm = getSingle($tbl, $col, $id);
$info    = mysqli_fetch_array($popForm);

if (isset($_POST['submit'])) {
    $fname    = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));
    $email    = trim($_POST['email']);

    $result  = editUser($fname, $username, $password, $email, $id);
    $message = $result;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Edit account</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Edit User</h2>
    <?php if (!empty($message)) {
        echo $message;
    } ?>
    <div class="info-wrap create-user">
        <form action="edit_user.php" method="post">
            <div class="input-wrap">
                <label for="">First Name</label><br>
                <input type="text" name="fname" value="<?php echo $info['user_fname'] ?>">
            </div>
            <div class="input-wrap">
                <label for="">Username</label><br>
                <input type="text" name="username" value="<?php echo $info['user_name'] ?>">
            </div>
            <div class="input-wrap">
                <label for="">Password</label><br>
                <input type="text" name="password" value="<?php echo $info['user_pass'] ?>">
            </div>
            <div class="input-wrap">
                <label for="">Email</label><br>
                <input type="email" name="email" value="<?php echo $info['user_email'] ?>">
            </div>
            <input type="submit" name="submit" value="Edit Account" class="create-submit">
        </form>
    </div>
</div>
</body>
</html>
