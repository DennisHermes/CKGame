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
            <h1 class="countdown">Bedankt voor het spelen!</h1>
        </div>
        <div>
            <h1 class="instructions"></h1>
        </div>

        <script>
            window.addEventListener("load", function(){
                const countdown = document.querySelector('.countdown');
                const instructions = document.querySelector('.instructions');
                setTimeout(() => {
                    countdown.classList.add('up');
                }, 3000);
                setTimeout(() => {
                    instructions.innerHTML = 'Door het corupt raken van meerdere bestanden hebben we de 3e game helaas niet af kunnen krijgen.';
                }, 4500);
            });
        </script>
    </body>

</html>