<?php

    session_start();

    require 'DatabaseHandler.php';

    $sql = "UPDATE `".$_SESSION['gamePin']."` SET `GameData`=`GameData`+5 WHERE `Players`='".$_SESSION["username"]."';";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
    }

?>