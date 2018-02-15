<?php
session_start();

function confirmLogin()
{
    if (!isset($_SESSION['user_id'])) {
        redirect_to("admin_login.php");
    }
}