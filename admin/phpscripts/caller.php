<?php
require_once('config.php');
if (isset($_GET['caller_id'])) {
    $dir = $_GET['caller_id'];
    if ($dir == "loggingout") {
        loggedOut();
    } else if ($dir == "delete") {
        $id = $_GET['id'];
        deleteUser($id);
    } else if ($dir == "deleteMovie") {
        $id = $_GET['id'];
        deleteMovie($id);
    } else {
        echo "Caller was passed incorrectly.";
    }
}