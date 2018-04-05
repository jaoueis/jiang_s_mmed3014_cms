<?php
require_once('phpscripts/config.php');

$tbl      = "tbl_genre";
$genQuery = getAll($tbl);

if (isset($_POST['submit'])) {
    $cover     = $_FILES['movImage'];
    $title     = $_POST['movTitle'];
    $year      = $_POST['movYear'];
    $runtime   = $_POST['movRuntime'];
    $storyline = $_POST['movStoryline'];
    $trailer   = $_POST['movTrailer'];
    $release   = $_POST['movRelease'];
    $genre     = $_POST['genList'];

    $result  = addMovie($cover, $title, $year, $runtime, $storyline, $trailer, $release, $genre);
    $message = $result;
};
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Add Content | Movies</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Add content</h2>
    <div class="info-wrap create-user">
        <?php if (!empty($message)) {
            echo $message;
        } ?>
        <form action="add_content.php" method="post" enctype="multipart/form-data">
            <div class="input-wrap">
                <label for="movImage">Cover Image</label><br>
                <input type="file" name="movImage" id="movImage">
            </div>
            <div class="input-wrap">
                <label for="movTitle">Movie Title</label><br>
                <input type="text" name="movTitle" id="movTitle">
            </div>
            <div class="input-wrap">
                <label for="movYear">Movie Year</label><br>
                <input type="text" name="movYear" id="movYear">
            </div>
            <div class="input-wrap">
                <label for="movRuntime">Movie Runtime</label><br>
                <input type="text" name="movRuntime" id="movRuntime">
            </div>
            <div class="input-wrap">
                <label for="movStoryline">Movie Storyline</label><br>
                <input type="text" name="movStoryline" id="movStoryline">
            </div>
            <div class="input-wrap">
                <label for="movTrailer">Movie Trailer</label><br>
                <input type="text" name="movTrailer" id="movTrailer">
            </div>
            <div class="input-wrap">
                <label for="movRelease">Movie Release</label><br>
                <input type="text" name="movRelease" id="movRelease">
            </div>
            <div class="input-wrap">
                <select name="genList">
                    <option value="">Please select a movie genre...</option>
                    <?php while ($row = mysqli_fetch_array($genQuery)) {
                        echo "<option value='{$row['genre_id']}'>{$row['genre_name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="submit" name="submit" value="Add" class="create-submit">
        </form>
    </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
