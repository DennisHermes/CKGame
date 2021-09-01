<?php

    session_start();

    require 'DatabaseHandler.php';

    $array = array();

    $sql = "SELECT * FROM `".$_SESSION['hostPin']."`;";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row["Players"]);
            }
        }
    }

    echo implode('~', $array);
?>