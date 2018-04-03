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

function filterResults($mov, $gen, $mov_gen, $gen_id, $gen_name, $filter) {
    include('connection.php');

    $filterQuery = "SELECT * FROM {$mov}, {$gen} WHERE {$mov}.{$mov_gen} = {$gen}.{$gen_id} AND {$gen}.{$gen_name}='{$filter}'";
    $runQuery    = mysqli_query($connect, $filterQuery);

    if ($runQuery) {
        return $runQuery;
    } else {
        $error = "There was a problem accessing this information. Sorry about your luck ;)";

        return $error;
    }
    mysqli_close($link);
}