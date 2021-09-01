<?php

    session_start();

    require 'DatabaseHandler.php';

    $points = 10;

    $sql = "SELECT * FROM `".$_SESSION['gamePin']."` WHERE `Players`='".$_SESSION["username"]."';";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $points = $row['GameData'];
            }
        }
    }

    if ($points >= 3) {
        $sql = "UPDATE `".$_SESSION['gamePin']."` SET `GameData`=`GameData`-3 WHERE `Players`='".$_SESSION["username"]."';";
        $stmt = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
        }
    } else if ($points >= 2) {
        $sql = "UPDATE `".$_SESSION['gamePin']."` SET `GameData`=`GameData`-2 WHERE `Players`='".$_SESSION["username"]."';";
        $stmt = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
        }
    } else if ($points >= 1) {
        $sql = "UPDATE `".$_SESSION['gamePin']."` SET `GameData`=`GameData`-1 WHERE `Players`='".$_SESSION["username"]."';";
        $stmt = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
        }
    }
?>