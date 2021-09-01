<?php

    session_start();

    require 'DatabaseHandler.php';

	$JSON = (object)[];

    if (isset($_SESSION['gamePin'])) {
        $gamePin = $_SESSION['gamePin'];
    } else {
        $gamePin = $_SESSION['hostPin'];
    }

    $sql = "SELECT * FROM `".$gamePin."`;";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $JSON->GameStatus = $row["GameData"];
            }
        }
    }
	
	$JSON = json_encode($JSON);
	echo $JSON;

?>