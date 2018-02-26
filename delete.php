
<?php
require_once('phpscripts/config.php');
$tbl  = 'tbl_user';
$user = getAll($tbl);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<h2>终结账号...</h2>
<?php while ($row = mysqli_fetch_array($user)) {
    echo "{$row['user_fname']}<a href='phpscripts/caller.php?caller_id=delete&id={$row['user_id']}'> Fired</a><br>";
}
?>
</body>
</html>