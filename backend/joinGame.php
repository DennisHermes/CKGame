<?php

    session_start();

    require 'DatabaseHandler.php';

    $gamePin = $_POST["gamePin"];
	$username = $_POST["username"];
    $color = 'Waiting';

    $sql = "INSERT INTO `".$gamePin."` (`Players`, `GameData`) VALUES ('".$username."', '".$color."');";
    echo($sql);
    $stmt = mysqli_stmt_init($connection);
    if(mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_execute($stmt);
        $_SESSION["gamePin"] = $gamePin;
        $_SESSION["username"] = $username;
        header('location: ../waiting');
    }
?>