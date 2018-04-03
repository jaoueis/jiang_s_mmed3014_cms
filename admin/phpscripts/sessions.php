<?php
session_start();

function confirmLogin() {
    if (!isset($_SESSION['user_id'])) {
        redirect_to("index.php");
    }
}

function loggedOut() {
    session_destroy();
    redirect_to("../index.php");
}