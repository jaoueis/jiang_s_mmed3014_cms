<?php
require_once('phpscripts/config.php');

$tbl      = "tbl_genre";
$genQuery = getAll($tbl);

if (isset($_POST['submit'])) {
    $title     = $_POST['mov_name'];
    $year      = $_POST['mov_year'];
    $rating    = $_POST['mov_rating'];
    $genre     = $_POST['genList'];
    $storyline = $_POST['mov_desc'];
    $cover     = $_FILES['mov_pic'];
    $trailer   = $_POST['mov_trailer'];

    $result  = addMovie($title, $year, $rating, $genre, $storyline, $cover, $trailer);
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
                <label for="mov_name">Movie name</label><br>
                <input type="text" name="mov_name" id="mov_name">
            </div>
            <div class="input-wrap">
                <label for="mov_year">Movie year</label><br>
                <input type="text" name="mov_year" id="mov_year">
            </div>
            <div class="input-wrap">
                <label for="mov_rating">Movie rating</label><br>
                <input type="text" name="mov_rating" id="mov_rating">
            </div>
            <div class="input-wrap">
                <label for="mov_desc">Movie storyline</label><br>
                <input type="text" name="mov_desc" id="mov_desc">
            </div>
            <div class="input-wrap">
                <label for="mov_pic">Cover image</label><br>
                <input type="file" name="mov_pic" id="mov_pic">
            </div>
            <div class="input-wrap">
                <label for="mov_trailer">Movie trailer</label><br>
                <input type="text" name="mov_trailer" id="mov_trailer">
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
