<?php
    session_start();

    require 'DatabaseHandler.php';

    $gamePin = $_SESSION['hostPin'];

    $winnerBool = true;

    $sql = "SELECT * FROM `".$gamePin."` ORDER BY GameData DESC;";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($winnerBool) {
                    $winner = $row['Players'];
                    $winnerBool = false;
                }
                $sql = "UPDATE `".$_SESSION['hostPin']."` SET `Worth`=".(intval($row['GameData'])/100*0.5*1000000).", `GameData`='game1done' WHERE `Players`='".$row['Players']."';";
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

            :root {
            --border-color: #D7DBE3;
            font-family: -apple-system, BlinkMacSystemFont, 'Roboto', 'Open Sans', 'Helvetica Neue', sans-serif;
            --green: #0CD977;
            --red: #FF1C1C;
            --pink: #FF93DE;
            --purple: #5767ED;
            --yellow: #FFC61C;
            --rotation: 0deg;
            }

            @keyframes scaleCup {
            0% {
                transform: scale(0.6);
            } 
            
            100% {
                transform: scale(1);
            }
            }

            h1 {
            text-align: center;
            font-size: 1em;
            margin-top: 20px;
            margin-bottom: 20px;
            }


            .modal-btn {
            display: block;
            margin: 0 -2rem -2rem -2rem;
            padding: 1rem 2rem;
            font-size: .75rem;
            text-transform: uppercase;
            text-align: center;
            color: #fff;
            font-weight: 600;
            border-radius: 0 0 .25rem .25rem;
            background-color: var(--green);
            text-decoration: none;
            }

            @keyframes confettiRain {
            0% {
                opacity: 1;
                margin-top: -100vh;
                margin-left: -200px;
            } 
            
            100% {
                opacity: 1;
                margin-top: 100vh;
                margin-left: 200px;
            }
            }

            .confetti {
            opacity: 0;
            position: absolute;
            width: 1rem;
            height: 1.5rem;
            transition: 500ms ease;
            animation: confettiRain 5s infinite;
            }

            #confetti-wrapper {
            overflow: hidden !important;
            }
        </style>
    </head>

    <body>
        <div class="box1">
            <div id="confetti-wrapper" style="display: none"></div>
            <h1 class="countdown">Stop met swipen!</h1>
        </div>

        <script>
            window.addEventListener("load", function() {
                const countdown = document.querySelector('.countdown');
                setTimeout(() => {
                    countdown.innerHTML = 'We hebben een winnaar!';
                }, 2000);
                setTimeout(() => {
                    countdown.innerHTML = '<?php echo($winner); ?>';
                    document.querySelector('#confetti-wrapper').style.display = 'block';
                }, 4500);
                setTimeout(() => {
                    countdown.innerHTML = 'We gaan door naar de tussenstand!';
                    document.querySelector('#confetti-wrapper').style.display = 'none';
                }, 11000);
                setTimeout(() => {
                    window.location.replace("leaderboard");
                }, 14000);
            });
            
            for(i=0; i<100; i++) {
                var randomRotation = Math.floor(Math.random() * 360);
                var randomScale = Math.random() * 1;
                var randomWidth = Math.floor(Math.random() * Math.max(document.documentElement.clientWidth, window.innerWidth || 0));
                var randomHeight =  Math.floor(Math.random() * Math.max(document.documentElement.clientHeight, window.innerHeight || 500));
                
                var randomAnimationDelay = Math.floor(Math.random() * 15);
                console.log(randomAnimationDelay);

                var colors = ['#0CD977', '#FF1C1C', '#FF93DE', '#5767ED', '#FFC61C', '#8497B0']
                var randomColor = colors[Math.floor(Math.random() * colors.length)];

                var confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.top=randomHeight + 'px';
                confetti.style.right=randomWidth + 'px';
                confetti.style.backgroundColor=randomColor;
                confetti.style.obacity=randomScale;
                confetti.style.transform='skew(15deg) rotate(' + randomRotation + 'deg)';
                confetti.style.animationDelay=randomAnimationDelay + 's';
                document.getElementById("confetti-wrapper").appendChild(confetti);
            }
        </script>
    </body>

</html>