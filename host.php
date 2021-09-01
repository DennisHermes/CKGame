<?php

	session_start();

	require 'backend/DatabaseHandler.php';

	$gamePin = rand(0,9).''.rand(0,9).''.rand(0,9).''.rand(0,9).''.rand(0,9).''.rand(0,9);

	$sql = 'CREATE TABLE `u33599p76268_CKGame`.`'.$gamePin.'` ( `Players` TINYTEXT NOT NULL , `GameData` TINYTEXT NOT NULL , `Worth` INT NOT NULL DEFAULT "0" , `Wins` INT NOT NULL DEFAULT "0");';
	echo($sql);
	$stmt = mysqli_stmt_init($connection);
	if(mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_execute($stmt);

		$_SESSION["hostPin"] = $gamePin;
		header('location: /hosting');
	}
?>