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
            <h1 class="countdown">3</h1>
        </div>
        <div>
            <h1 class="instructions"></h1>
        </div>

        <script>
            window.addEventListener("load", function(){
                const countdown = document.querySelector('.countdown');
                const instructions = document.querySelector('.instructions');
                setTimeout(() => {
                    countdown.innerHTML = '2';
                }, 1000);
                setTimeout(() => {
                    countdown.innerHTML = '1';
                }, 2000);
                setTimeout(() => {
                    countdown.innerHTML = 'C';
                }, 3000);
                setTimeout(() => {
                    countdown.innerHTML = 'CK';
                }, 3500);
                setTimeout(() => {
                    countdown.innerHTML = 'CKGame!';
                }, 4000);
                setTimeout(() => {
                    countdown.classList.add('up');
                }, 5000);
                setTimeout(() => {
                    instructions.innerHTML = 'Leuk dat je meespeelt met CKGame';
                }, 6500);
                setTimeout(() => {
                    instructions.innerHTML = 'We gaan vandaag 3 verschillende spelletjes spelen met als doel om jullie alles te leren over Jeff Koons';
                }, 9000);
                setTimeout(() => {
                    instructions.innerHTML = 'Wie aan het eind van de 3 spelletjes het meeste waard is wint het spel!';
                }, 15000);
                setTimeout(() => {
                    instructions.innerHTML = 'Laten we doorgaan naar het eerste spel!';
                }, 20000);
                setTimeout(() => {
                    instructions.innerHTML = '';
                    countdown.classList.remove('up');
                }, 23000);
                setTimeout(() => {
                    countdown.innerHTML = '3';
                }, 24000);
                setTimeout(() => {
                    countdown.innerHTML = '2';
                }, 25000);
                setTimeout(() => {
                    countdown.innerHTML = '1';
                }, 26000);
                setTimeout(() => {
                    countdown.innerHTML = 'C';
                }, 27000);
                setTimeout(() => {
                    countdown.innerHTML = 'CK';
                }, 27500);
                setTimeout(() => {
                    countdown.innerHTML = 'CKGame!';
                }, 28000);
                setTimeout(() => {
                    window.location.replace("game1");
                }, 29000);
            });
        </script>
    </body>

</html>