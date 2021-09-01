<html>

	<head>
		<link rel="stylesheet" href="css/waiting.css">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <?php
            session_start();
        ?>
	</head>

	<body>
        <div class="box1">
            <h1 class="title" style="font-size: 4vw;">Wachtend tot het spel wordt gestart!</h1>
        </div>

        <script>
            setInterval(function() {
                $.ajax({
                    type: "get",
                    url:"/backend/dataReference",
                    cache: false,
                    datatype: "json",
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if (obj.GameStatus == 'Starting') {
                            window.location.replace("gameScreens/starting");
                        }
                    }
                });
            }, 1000);
        </script>
	<body>

    <div class="footer">
        <h1 class="title" style="font-size: 3vw;">Verbonden met gamepin » <?php echo $_SESSION["gamePin"]; ?></h1>
    </div>

</html>