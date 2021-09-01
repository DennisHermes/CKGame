<?php
    session_start();

    require 'DatabaseHandler.php';

    $gamePin = $_SESSION['hostPin'];

    $sql = "SELECT * FROM `".$gamePin."` ORDER BY GameData DESC;";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='game2done';";
                $stmt = mysqli_stmt_init($connection);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_execute($stmt);
                }
            }
        }
    }

?>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/instructions.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

        <style>
            .box1 {
                justify-content: center;
                align-items: center;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="box1">
            <div id="confetti-wrapper" style="display: none"></div>
            <h1 class="countdown">Stop met typen!</h1>
        </div>

        <script>
            window.addEventListener("load", function() {
                const countdown = document.querySelector('.countdown');
                setTimeout(() => {
                    countdown.innerHTML = 'We gaan door naar de tussenstand!';
                }, 3000);
                setTimeout(() => {
                    window.location.replace("leaderboard2");
                }, 6000);
            });
        </script>
    </body>

</html>