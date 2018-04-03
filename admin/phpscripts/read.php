<?php
function getAll($tbl) {
    include('connection.php');
    $queryAll = "SELECT * FROM {$tbl}";
    $runAll   = mysqli_query($connect, $queryAll);

    if ($runAll) {
        return $runAll;
    } else {
        $error = "There was a problem accessing this information. Sorry about your luck ;)";

        return $error;
    }

    mysqli_close($connect);
}

function getSingle($tbl, $col, $id) {
    include('connection.php');
    $querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
    $runSingle   = mysqli_query($connect, $querySingle);

    if ($runSingle) {
        return $runSingle;
    } else {
        $error = "There was a problem accessing this information. Sorry about your luck ;)";

        return $error;
    }

    mysqli_close($connect);
}