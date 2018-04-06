<?php
require_once('admin/phpscripts/config.php');
if (isset($_GET['id'])) {
    $tbl      = "tbl_movies";
    $genre    = "tbl_genre";
    $col      = "mov_id";
    $genreID  = "genre_id";
    $movGen   = "mov_genre";
    $id       = $_GET['id'];
    $getMovie = getSingle($tbl, $col, $id);
    $getGenre = getGenre($genre, $tbl, $genreID, $movGen, $col, $id);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<title>Movies</title>
</head>
<body>
<?php
if (!is_string($getMovie && $getGenre)) {
    $row  = mysqli_fetch_array($getMovie);
    $row2 = mysqli_fetch_array($getGenre);
} else {
    echo "<p>$getMovie</p>";
}
?>

<div class="container-fluid header">
    <div class="row">
        <nav class="col-12">
            <ul>
                <li><a href="index.php">All Movies</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="container-fluid header-hero">
    <div class="row">
        <div class="col-12">
            <?php
            echo "<h1>{$row['mov_name']}</h1>";
            ?>
        </div>
    </div>
</div>

<div class="container-fluid main-content">
    <div class="container details">
        <section class="row">
            <div class="col-6 mov-cover-img">
                <?php echo "<img src='images/{$row['mov_pic']}'>"; ?>
            </div>
            <div class="col-6">
                <div>
                    <h3>Year </h3>
                    <?php
                    echo "<p>{$row['mov_year']}</p>";
                    ?>
                </div>
                <div>
                    <h3>Genre </h3>
                    <?php
                    echo "<p>{$row2['genre_name']}</p>";
                    ?>
                </div>
                <div>
                    <h3>Rating </h3>
                    <?php
                    echo "<p>{$row['mov_rating']}</p>";
                    ?>
                </div>
                <div>
                    <h3>Storyline </h3>
                    <?php
                    echo "<p>{$row['mov_desc']}</p>";
                    ?>
                </div>
            </div>
            <div class="col-12 trailer">
                <iframe src='<?php echo "{$row['mov_trailer']}"; ?>' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>