<html>

	<head>
		<link rel="stylesheet" href="css/usernameForm.css">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	</head>

	<body>
		<ul>
			<li>
				<h1 class="Title">CKGame</h1>
			
				<div class="content">

					<?php
						if (isset($_GET["gamePin"])) {
							$gamePin = htmlspecialchars($_GET["gamePin"]);
						} else {
							$gamePin = $_POST["gamePin"];
						}
					?>

					<form action="backend/joinGame.php" method="post">
						<input type="hidden" name="gamePin" value="<?php echo $gamePin; ?>" required />
						<input type="text" placeholder="Gebruikersnaam" name="username" size="20" maxlength="10" required />
						<br><br>
						<input type="submit" value="Doe mee!">
					</form>
					
				</div>
			</li>
			<li>
				<p class="madeBy">Dennis & Bas</p>
			</li>
		<ul>
	<body>

</html>