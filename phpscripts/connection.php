<?php
$host     = "localhost";
$user     = "root";
$password = "root";
$database = "db_users";
$port     = 3306;

$connect = mysqli_connect($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} else {
    echo "successfully";
}