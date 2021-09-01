<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/game1playing.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body id="body">

        <br>

        <h1 style="font-size: 5vw;">Balloon dog race</h1>

        <br><br><br>

            <div class="container">
                <div class="skills bar0">
                    0%
                    <img src="../dog.png" alt="">
                </div>
            </div>

            <br><br><br>

            <div class="container">
                <div class="skills bar1">
                    0%
                    <img src="../dog.png" alt="">
                </div>
            </div>

            <br><br><br>

            <div class="container">
                <div class="skills bar2">
                    0%
                    <img src="../dog.png" alt="">
                </div>
            </div>

            <br><br><br>

            <div class="container">
                <div class="skills bar3">
                    0%
                    <img src="../dog.png" alt="">
                </div>
            </div>

            <br><br><br>

            <div class="container">
                <div class="skills bar4">
                    0%
                    <img src="../dog.png" alt="">
                </div>
            </div>

            <div class="overlay">
                <div class="text"><h1 class="countdown" style="font-size: 5vw;">Iedereen klaar?</h1></div>
            </div>
    </body>

    <script>
        window.addEventListener("load", function(){
            var playing = false;
            var countdown = document.querySelector('.countdown');

            setTimeout(() => {
                document.querySelector('.overlay').classList.add('down');
            }, 1000);
            setTimeout(() => {
                countdown.innerHTML = '3';
            }, 4000);
            setTimeout(() => {
                countdown.innerHTML = '2';
            }, 5000);
            setTimeout(() => {
                countdown.innerHTML = '1';
            }, 6000);
            setTimeout(() => {
                countdown.innerHTML = 'C';
            }, 7000);
            setTimeout(() => {
                countdown.innerHTML = 'CK';
            }, 7500);
            setTimeout(() => {
                countdown.innerHTML = 'CKGame!';
                $.ajax({
                    type: "get",
                    url:"../backend/startGame1",
                    cache: false,
                    datatype: "json",
                });
            }, 8000);
            setTimeout(() => {
                document.querySelector('.overlay').classList.remove('down');
            }, 8500);
            setTimeout(() => {
                playing = true;
            }, 9000);

            setInterval(function() {
                if (playing) {
                    $.ajax({
                        type: "get",
                        url:"../backend/game1data",
                        cache: false,
                        datatype: "json",
                        success: function(data) {
                            if (data != 'done') {
                                document.querySelector('#body').innerHTML = data;
                            } else {
                                window.location.replace("game1done");
                            }
                        }
                    });
                }
            }, 500);
        });
    </script>

</html>