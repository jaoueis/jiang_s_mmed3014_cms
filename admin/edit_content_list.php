<?php
require_once('phpscripts/config.php');
confirmLogin();

if (isset($_POST['update'], $_GET['id'])) {
    $movieName      = $_POST['mov_name'];
    $movieYear      = $_POST['mov_year'];
    $movieRating    = $_POST['mov_rating'];
    $movieStoryline = $_POST['mov_desc'];
    $moviePoster    = $_FILES['mov_pic'];
    $movieTrailer   = $_POST['mov_trailer'];
    $movieGenre     = $_POST['mov_genre'];
    $id             = $_GET['id'];

    $result  = editMovie($movieName, $movieYear, $movieRating, $movieStoryline, $moviePoster, $movieTrailer, $movieGenre, $id);
    $message = $result;
    var_dump($id);
    exit();
}

$tbl      = "tbl_movies";
$genQuery = getAll($tbl);

if (isset($_GET['id'])) {
    $genre    = "tbl_genre";
    $col      = "mov_id";
    $genreID  = "genre_id";
    $movGen   = "mov_genre";
    $id       = $_GET['id'];
    $getMovie = getSingle($tbl, $col, $id);
    $getGenre = getAll($genre);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Edit Content | Movies</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('header.html'); ?>
<div class="main-wrap">
    <h2>Edit content</h2>
    <div class="info-wrap create-user list">
        <?php if (!empty($message)) {
            echo $message;
        } ?>

        <?php
        while ($row = mysqli_fetch_array($genQuery)) {
            echo "<a href='edit_content_list.php?id={$row['mov_id']}'><h3>{$row['mov_name']}</h3></a>";
        }
        ?>
    </div>
    <div class="info-wrap create-user details-con">
        <?php
        if (!is_string($getMovie)) {
            $row = mysqli_fetch_array($getMovie);
        } else {
            echo "<p>$getMovie</p>";
        }
        ?>
        <form action="edit_content_list.php" method="post" enctype="multipart/form-data">
            <div class="input-wrap">
                <label for="mov_name">Movie name</label><br>
                <input type="text" name="mov_name" id="mov_name" value="<?php echo $row['mov_name'] ?>">
            </div>
            <div class="input-wrap">
                <label for="mov_year">Movie year</label><br>
                <input type="text" name="mov_year" id="mov_year" value="<?php echo $row['mov_year'] ?>">
            </div>
            <div class="input-wrap">
                <label for="mov_rating">Movie rating</label><br>
                <input type="text" name="mov_rating" id="mov_rating" value="<?php echo $row['mov_rating'] ?>">
            </div>
            <div class="input-wrap">
                <label for="mov_desc">Movie storyline</label><br>
                <input type="text" name="mov_desc" id="mov_desc" value="<?php echo $row['mov_desc'] ?>">
            </div>
            <div class="input-wrap">
                <label for="mov_pic">Cover image</label><br>
                <input type="file" name="mov_pic" id="mov_pic">
            </div>
            <div class="input-wrap">
                <label for="mov_trailer">Movie trailer</label><br>
                <input type="text" name="mov_trailer" id="mov_trailer" value="<?php echo $row['mov_trailer'] ?>">
            </div>

            <div class="input-wrap">
                <select name="mov_genre">
                    <option value="">Please select a movie genre...</option>
                    <?php while ($row2 = mysqli_fetch_array($getGenre)) {
                        echo "<option value='{$row2['genre_id']}'>{$row2['genre_name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="submit" name="update" value="Update" class="create-submit">
        </form>
        <div class="form-image">
            <img src="../images/<?php echo $row['mov_pic'] ?>" alt="<?php echo $row['mov_name'] ?>">
        </div>
    </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>