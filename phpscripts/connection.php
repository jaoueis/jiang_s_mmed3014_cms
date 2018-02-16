<?php
$host     = "localhost";
$user     = "root";
$pwd      = "root";
$database = "db_users";
$port     = 8889;

$connect = mysqli_connect($host, $user, $pwd, $database, $port);

if ($connect->connect_error) {
    die('Error : (' . $connect->connect_errno . ') ' . $connect->connect_error);
}