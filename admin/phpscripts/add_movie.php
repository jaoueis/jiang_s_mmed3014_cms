<?php
function addMovie($title, $year, $rating, $genre, $storyline, $cover, $trailer) {
    include('connection.php');
    $storyline = mysqli_real_escape_string($connect, $storyline);
    if ($cover['type'] == "image/jpg" || $cover['type'] == "image/jpeg") {
        $targetPath = "../images/{$cover['name']}";
        $filename   = $cover['name'];
        if (move_uploaded_file($cover['tmp_name'], $targetPath)) {
            $qstring    = "INSERT INTO tbl_movies VALUES(NULL, '{$title}', '{$year}', '{$rating}', '{$genre}', '{$storyline}', '{$filename}','{$trailer}') ";
            $movieQuery = mysqli_query($connect, $qstring);
            if ($movieQuery) {
                redirect_to("add_content.php");
            } else {
                var_dump($movieQuery);
                exit();
            }
        } else {
            $message = "Whoops, that didn't work.";
            return $message;
        }
    } else {
        $message = "Whoops, the file type is not supported ;(";
        return $message;
    }
    mysqli_close($connect);
}