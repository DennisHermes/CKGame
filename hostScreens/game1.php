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
                    countdown.innerHTML = 'Game 1';
                }, 2000);
                setTimeout(() => {
                    countdown.classList.add('up');
                }, 3000);
                setTimeout(() => {
                    instructions.innerHTML = 'Om kennis te maken met de kunst van Jeff Koons gaan we lekker tinderen!';
                }, 4500);
                setTimeout(() => {
                    instructions.innerHTML = 'Maar natuurlijk wel op een iets andere manier';
                }, 9000);
                setTimeout(() => {
                    instructions.innerHTML = 'Je krijgt zometeen op je eigen scherm een plaatje te zien met een kunst object';
                }, 13000);
                setTimeout(() => {
                    instructions.innerHTML = 'Als je denkt dat het gaat om een kunstwerk van Jeff Koons dan swipe je naar rechts, zo niet swipe je naar links';
                }, 20000);
                setTimeout(() => {
                    instructions.innerHTML = 'Op dit scherm krijgt iedereen zijn eigen balloon dog en de gene die als eerst de finish bereikt wint dit eerste spel!';
                }, 27000);
                setTimeout(() => {
                    window.location.replace("game1playing");
                }, 35000);
            });
        </script>
    </body>

</html>