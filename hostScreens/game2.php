<?php

    session_start();

    require 'DatabaseHandler.php';

    $sql = "UPDATE `".$_SESSION['hostPin']."` SET `GameData`='game2';";
    $stmt = mysqli_stmt_init($connection);
    if (mysqli_stmt_prepare($stmt, $sql)) {
		mysqli_stmt_execute($stmt);
    }

?>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/instructions.css">


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
            <h1 class="countdown"> </h1>
        </div>
        <div>
            <h1 class="instructions"></h1>
        </div>

        <script>
            window.addEventListener("load", function() {
                const countdown = document.querySelector('.countdown');
                const instructions = document.querySelector('.instructions');
                setTimeout(() => {
                    countdown.innerHTML = 'Game ';
                }, 1000);
                setTimeout(() => {
                    countdown.innerHTML = 'Game 2';
                }, 2000);
                setTimeout(() => {
                    countdown.classList.add('up');
                }, 3000);
                setTimeout(() => {
                    instructions.innerHTML = 'Bij het volgende spel gaan we kijken wie het snelst kan type';
                }, 4500);
                setTimeout(() => {
                    instructions.innerHTML = 'Er komen zometeen zinnen op het hoofdscherm waar een woord is uitgelaten';
                }, 9500);
                setTimeout(() => {
                    instructions.innerHTML = 'Aan jou de taak om uit te vinden welk woord dat is en het zo snel mogelijk te typen';
                }, 15500);
                setTimeout(() => {
                    window.location.replace("game2playing");
                }, 22500);
            });
        </script>
    </body>

</html>