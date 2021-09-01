<?php

    session_start();

    require '../backend/DatabaseHandler.php';

?>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../css/waiting.css">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	
	<body>
		<div class="box1">
			<?php
				$sql = "SELECT * FROM `".$_SESSION['gamePin']."` ORDER BY worth DESC";
				$stmt = mysqli_stmt_init($connection);
				if (mysqli_stmt_prepare($stmt, $sql)) {
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					if (mysqli_num_rows($result) > 0) {
						$i = 1;
						while($row = mysqli_fetch_assoc($result)) {
							if ($row['Players'] == $_SESSION["username"]) {
								echo('<h1 class="title" style="font-size: 4vw;">Je staat op positie '.$i.'</h1>');
							} else {
								$i++;
							}
						}
					}
				}
			?>
		</div>

		<script>
			setTimeout(() => {
				window.location.replace("game2");
			}, 10000);
        </script>
	</body>

	<div class="footer">
        <h1 class="title" style="font-size: 3vw;">Verbonden met gamepin » <?php echo $_SESSION["gamePin"]; ?></h1>
    </div>
	
</html>