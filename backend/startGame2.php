<?php

    session_start();

    require 'DatabaseHandler.php';

    $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='text:';";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_execute($stmt);
    }
?>