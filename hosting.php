<?php

    session_start();

?>

<html>

    <head>
		<link rel="stylesheet" href="css/hosting.css">
		<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>

    <body>
        <div>
            <div class="box1">
                <br>
                <h1 style="font-size: 2vw; line-height: 0;">Scan de QR-code of ga naar <b style="color: #474747;">ckgame.nl</b> en vul onderstaande code!</h1>
                <h1 style="font-size: 2vw; line-height: 0;">Game pin » <?php echo $_SESSION["hostPin"]; ?></h1>
                <img src="<?php echo 'https://chart.googleapis.com/chart?cht=qr&chl=ckgame.nl/usernameForm?gamePin='.$_SESSION["hostPin"].'&chs=160x160&chld=L|0'; ?>" class="qr-code" />
                <br><br><br>
                <h1 style="font-size: 2vw; line-height: 0;">Wachtende spelers</h1>
                <div style="width: 60%; margin: auto;"><hr></div>
            </div>

            <div id="new" class="box2">
                <p id="players" style="font-size: 2vw;"></p>

                <script>
                    var players = new Array();

                    setInterval(function() { 
                        $.ajax({
                            type:"post",
                            url:"backend/playersFrame.php",
                            datatype:"json",
                            cache: false,
                            success:function(data) {
                                document.getElementById("players").innerHTML = data.replaceAll('~', ' ');
                            }
                        });
                    }, 1000);
                </script>

                <div class="start">
                    <button onclick="window.location.replace('/backend/startGame');"><b>start »</b></button>
                </div>
            </div>
        </div>
	</body>

</html>