<?php
require_once('phpscripts/config.php');
//confirmLogin();
$id      = $_SESSION['user_id'];
$tbl     = "tbl_user";
$col     = "user_id";
$popForm = getSingle($tbl, $col, $id);
$info    = mysqli_fetch_array($popForm);
//echo $popForm;
if (isset($_POST['submit'])) {
    $fname    = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email    = trim($_POST['email']);
    $result   = editUser($fname, $username, $password, $email, $id);
    $message  = $result;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Edit User</title>
</head>
<body>
<h2>Edit User</h2>
<?php if (!empty($message)) {
    echo $message;
} ?>
<form action="edit.php" method="post">
    <label for="">First Name</label>
    <input type="text" name="fname" value="<?php echo $info['user_fname'] ?>">

    <label for="">Username</label>
    <input type="text" name="username" value="<?php echo $info['user_name'] ?>">

    <label for="">Password</label>
    <input type="text" name="password" value="<?php echo $info['user_pass'] ?>">

    <label for="">Email</label>
    <input type="email" name="email" value="<?php echo $info['user_email'] ?>">

    <input type="submit" name="submit" value="Edit Account">
</form>
</body>
</html>