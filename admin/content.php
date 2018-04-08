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
<title>Admin Content | Movies</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Content</h2>
    <div class="info-wrap">
        <a href="add_content.php" class="account-anchor">Add content</a>
        <br><br>
        <a href="edit_content_list.php" class="account-anchor">Edit content</a>
    </div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
