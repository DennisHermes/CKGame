<?php

    session_start();

    require 'DatabaseHandler.php';

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/leaderboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
	<div class="container">
		<div class="leaderboard">
			<div class="head">
				<i class="fas fa-crown"></i>
                <br><br>
				<h1>Scoreboard</h1>
			</div>
			<div class="body">
				<ol>
                    <?php
                        $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='Leaderboard';";
                        $stmt = mysqli_stmt_init($connection);
                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_execute($stmt);
                        }

                        $sql = "SELECT * FROM `".$_SESSION['hostPin']."` ORDER BY worth DESC";
                        $stmt = mysqli_stmt_init($connection);
                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            $count = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while($count < 5 && $row = mysqli_fetch_assoc($result)) {
                                    echo '<li>';
                                        echo '<mark>'.$row['Players'].'</mark>';
                                        echo '<small>'.$row['Worth'].'</small>';
                                    echo '</li>';
                                    $count++;
                                }
                            }
                        }
                    ?>
				</ol>
			</div>
		</div>
	</div>

    <script>
        const container = document.querySelector('.container');
        window.addEventListener("load", function(){
            setTimeout(() => {
                container.classList.add('fade');
            }, 200);
            setTimeout(() => {
                window.location.replace("endGame");
            }, 10000);
        });
    </script>
</body>

</html>