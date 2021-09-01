<?php

    require 'DatabaseHandler.php';

	$username = "ClosedGame";
    $color = "ClosedGame";

    $sql = "INSERT INTO `".$_SESSION['hostPin']."` (`Players`, `Color`) VALUES ('".$username."', '".$color."');";
    $stmt = mysqli_stmt_init($connection);
    if(mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_execute($stmt);
    }
?>