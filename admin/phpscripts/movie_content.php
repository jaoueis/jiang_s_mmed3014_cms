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

function editMovie($movieName, $movieYear, $movieRating, $movieStoryline, $moviePoster, $movieTrailer, $movieGenre, $id) {
    include('connection.php');
    $movieStoryline = mysqli_real_escape_string($connect, $movieStoryline);
    if ($moviePoster['type'] == "image/jpg" || $moviePoster['type'] == "image/jpeg") {
        $targetPath = "../images/{$moviePoster['name']}";
        $filename   = $moviePoster['name'];
        if (move_uploaded_file($moviePoster['tmp_name'], $targetPath)) {
            $updatestring = "UPDATE tbl_movies SET mov_name='{$movieName}', mov_year='{$movieYear}', mov_rating='{$movieRating}', mov_genre='{$movieGenre}', mov_desc='{$movieStoryline}', mov_pic='{$filename}', mov_trailer='{$movieTrailer}' WHERE mov_id={$id}";
            $updatequery  = mysqli_query($connect, $updatestring);
            var_dump($updatestring);
            exit();
            if ($updatequery) {
                redirect_to("edit_content_list.php");
            } else {
                $message = "Wrong! Wrong! Wrong!";
                return $message;
            }
        } else {
            $message = "123";
            return $message;
        }
    } else {
        $message = "1234";
        return $message;
    }
    mysqli_close($connect);
}