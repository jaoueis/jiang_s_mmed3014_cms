<?php
require_once('config.php');
if (isset($_GET['caller_id'])) {
    $dir = $_GET['caller_id'];
    if ($dir == "loggingout") {
        loggedOut();
    } else {
        echo "Caller is was passed incorrectly.";
    }
}