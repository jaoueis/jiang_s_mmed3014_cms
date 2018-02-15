<?php
$host     = "localhost";
$user     = "root";
$password = "root";
$database = "db_users";
$port     = 8889;

$connect = mysqli_connect($host, $user, $password, $database, $port);

if ($connect->connect_error) {
    die('Error : (' . $connect->connect_errno . ') ' . $connect->connect_error);
}