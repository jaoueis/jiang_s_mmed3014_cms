<?php
require_once('phpscripts/config.php');
confirmLogin();
$tbl  = 'tbl_user';
$user = getAll($tbl);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Delete User | Movies</title>
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Delete User</h2>
    <div class="info-wrap create-user">
        <?php while ($row = mysqli_fetch_array($user)) {
            echo "{$row['user_fname']}<br><a href='phpscripts/caller.php?caller_id=delete&id={$row['user_id']}' class='delete-button'> Delete</a><br>";
        }
        ?>
    </div>
</div>
</body>
</html>