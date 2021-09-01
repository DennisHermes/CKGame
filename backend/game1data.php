<?php

    session_start();

    require 'DatabaseHandler.php';

	$html = '<br><h1 style="font-size: 5vw;">Balloon dog race</h1><br><br><br>';
    $count = 0;

    $gamePin = $_SESSION['hostPin'];

    $sql = "SELECT * FROM `".$gamePin."` ORDER BY worth DESC;";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($count < 5 && $row = mysqli_fetch_assoc($result)) {
                if (intval($row['GameData']) < 200) {
                    $html = $html.'
                    <div class="container">
                        <div class="skills bar" style="width: '.(intval($row['GameData'])*0.5).'%;">
                            '.(intval($row['GameData'])*0.5).'%
                            <img src="../dog.png" alt="">
                        </div>
                    </div>
                    <h1 style="font-size: 2vw;">'.$row['Players'].' - '.$row['GameData'].'/200 points</h1>
                    <br><br><br>';
                    $count++;
                } else {
                    echo('done');
                    exit();
                }
            }
        }
    }
	
	echo $html;

?>