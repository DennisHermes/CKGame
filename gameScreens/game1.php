<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/game1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            #overlay {
                position: fixed;
                display: none;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0,0,0,0.5);
                z-index: 2;
                cursor: pointer;
            }

            #text{
                position: absolute;
                top: 50%;
                left: 50%;
                font-size: 50px;
                color: white;
                transform: translate(-50%,-50%);
                -ms-transform: translate(-50%,-50%);
            }
        </style>
    </head>

    <body>
        <div class="tinder">
            <div class="tinder--cards">
                    <?php
                        for ($x = 0; $x <= 100; $x++) {
                            echo '
                                <div class="tinder--card">
                                    <img class="img" src="../JefKoons/'.rand(1,28).'.jpg">
                                </div>
                            ';
                        }
                    ?>
            </div>
        </div>

        <div id="overlay">
            <div id="text"><h1 class="countdown" style="font-size: 5vw;"></h1></div>
        </div>

        <script>
            setInterval(function() { 
                $.ajax({
                    type:"post",
                    url:"../backend/dataReference.php",
                    datatype:"json",
                    cache: false,
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if (obj.GameStatus == 'game1done') {
                            window.location.replace("game1done");
                        }
                    }
                });
            }, 1000);

            var tinderContainer = document.querySelector('.tinder');
            var allCards = document.querySelectorAll('.tinder--card');
            var nope = document.getElementById('nope');
            var love = document.getElementById('love');

            var side = false;
            var cartCounter = 0;

            function initCards(card, index) {
            var newCards = document.querySelectorAll('.tinder--card:not(.removed)');

            newCards.forEach(function (card, index) {
                card.style.zIndex = allCards.length - index;
                card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
                card.style.opacity = (10 - index) / 10;
            });
            
            tinderContainer.classList.add('loaded');
            }

            initCards();

            allCards.forEach(function (el) {
            var hammertime = new Hammer(el);

            hammertime.on('pan', function (event) {
                el.classList.add('moving');
            });

            hammertime.on('pan', function (event) {
                if (event.deltaX === 0) return;
                if (event.center.x === 0 && event.center.y === 0) return;

                tinderContainer.classList.toggle('tinder_love', event.deltaX > 0);
                tinderContainer.classList.toggle('tinder_nope', event.deltaX < 0);

                if (event.deltaX > 0) {
                    side = true;
                } else {
                    side = false;
                }

                var xMulti = event.deltaX * 0.03;
                var yMulti = event.deltaY / 80;
                var rotate = xMulti * yMulti;

                event.target.style.transform = 'translate(' + event.deltaX + 'px, ' + event.deltaY + 'px) rotate(' + rotate + 'deg)';
            });

            hammertime.on('panend', function (event) {
                el.classList.remove('moving');
                tinderContainer.classList.remove('tinder_love');
                tinderContainer.classList.remove('tinder_nope');

                var moveOutWidth = document.body.clientWidth;
                var keep = Math.abs(event.deltaX) < 80 || Math.abs(event.velocityX) < 0.5;

                event.target.classList.toggle('removed', !keep);

                if (keep) {
                    event.target.style.transform = '';
                } else {
                    if ((parseInt(el.querySelector('.img').src.replace('https://ckgame.nl/JefKoons/', '').replace('.jpg', '')) < 15) == side) {
                        $.ajax({
                            type:"post",
                            url:"../backend/game1pointerUp.php",
                            datatype:"json",
                            cache: false
                        });
                        document.querySelector(".countdown").innerHTML = '✔';
                        document.getElementById("overlay").style.display = "block";
                        setTimeout(() => {
                            document.getElementById("overlay").style.display = "none";
                        }, 500);
                    } else {
                        $.ajax({
                            type:"post",
                            url:"../backend/game1pointerDown.php",
                            datatype:"json",
                            cache: false
                        });
                        document.querySelector(".countdown").innerHTML = '✗';
                        document.getElementById("overlay").style.display = "block";
                        setTimeout(() => {
                            document.getElementById("overlay").style.display = "none";
                        }, 500);
                    }

                    cartCounter++;
                    if (cartCounter == 100) {
                        location.reload();
                    }
                    
                    var endX = Math.max(Math.abs(event.velocityX) * moveOutWidth, moveOutWidth);
                    var toX = event.deltaX > 0 ? endX : -endX;
                    var endY = Math.abs(event.velocityY) * moveOutWidth;
                    var toY = event.deltaY > 0 ? endY : -endY;
                    var xMulti = event.deltaX * 0.03;
                    var yMulti = event.deltaY / 80;
                    var rotate = xMulti * yMulti;

                    event.target.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
                    initCards();
                }
            });
            });
        </script>
    </body>

</html>