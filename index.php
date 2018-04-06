<?php
require_once('admin/phpscripts/config.php');

$tbl      = "tbl_genre";
$genQuery = getAll($tbl);

if (isset($_GET['filter'])) {
    $mov       = "tbl_movies";
    $gen       = "tbl_genre";
    $mov_gen   = "mov_genre";
    $gen_id    = "genre_id";
    $gen_name  = "genre_name";
    $filter    = $_GET['filter'];
    $getMovies = filterResults($mov, $gen, $mov_gen, $gen_id, $gen_name, $filter);
} else {
    $tbl       = "tbl_movies";
    $getMovies = getAll($tbl);
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Oswald" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<title>Movies</title>
</head>
<body>

<div class="container-fluid header">
    <div class="row">
        <nav class="col-12">
            <ul>
                <li><a href="index.php">All Movies</a></li>
                <?php while ($row = mysqli_fetch_array($genQuery)) {
                    echo "<li><a href='index.php?filter={$row['genre_name']}'>{$row['genre_name']}</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</div>

<div class="container-fluid header-hero">
    <div class="row">
        <div class="col-12">
            <h1>Movies</h1>
            <?php
            if (!empty($filter)) {
                echo "<h2>{$filter}</h2>";
            } else {
                echo "<h2>All Movies</h2>";
            }
            ?>
        </div>
    </div>
</div>

<div class="container-fluid main-content">
    <div class="container">
        <section class="row">
            <?php
            if (!is_string($getMovies)) {
                while ($row = mysqli_fetch_array($getMovies)) {
                    echo "<div class='col-4 row movie-piece'><div class='col-12'><div class='movie-poster' style='background: url(\"images/{$row['mov_pic']}\")'></div></div><div class='col-12'><a href='details.php?id={$row['mov_id']}'><h3>{$row['mov_name']}</h3></a></div></div>";
                }
            } else {
                echo "<p class='error'>{$getMovies}</p>";
            }
            ?>
        </section>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>