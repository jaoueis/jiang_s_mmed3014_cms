<?php function generatePas($length = 8) {
    $pool         = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $generatedPas = substr(str_shuffle($pool), 0, $length);
    echo $generatedPas;
}

generatePas();
