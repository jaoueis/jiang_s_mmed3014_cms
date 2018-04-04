<?php
$host     = "localhost";
$user     = "root";
$pwd      = ""; //for Mac the password is root
$database = "db_users";
// $port     = 8889; //comment out for Windows

$connect = mysqli_connect($host, $user, $pwd, $database); //delete $port for Windows

if ($connect->connect_error) {
    die('Error : (' . $connect->connect_errno . ') ' . $connect->connect_error);
}