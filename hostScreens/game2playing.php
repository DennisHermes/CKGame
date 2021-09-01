<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/game2playing.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
            <h1 class="countdown" style="font-size: 5vw;" id="question"></h1>
        </div>
        <div>
            <h1 class="instructions" id="bottom"></h1>
        </div>

        <div class="overlay">
            <div class="text"><h1 class="countdown" id="countdown" style="font-size: 5vw;">Iedereen klaar?</h1></div>
        </div>

        <script>
            var Timer = false;

            window.addEventListener("load", function(){
                var playing = false;
                var countdown = document.querySelector('#countdown');
                var question = document.querySelector('#question');
                var bottom = document.querySelector('#bottom');
                var moneyText = document.querySelector('#money');

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
                        url:"../backend/startGame2",
                        cache: false,
                        datatype: "json",
                    });
                }, 8000);
                setTimeout(() => {
                    document.querySelector('.overlay').classList.remove('down');
                }, 8500);
                setTimeout(() => {
                    playing = true;
                    question.innerHTML = 'Zin 1';
                }, 9500);
                setTimeout(() => {
                    playing = true;
                    question.classList.add('up');
                }, 10000);
                setTimeout(() => {
                    question.innerHTML = 'De ....... ... is het meest bekende kunstwerk van Jeff Koons.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=1",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 11500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">....o.. ...</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 13500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">....o.. d..</b> is het meest bekende kunstwerk van Jeff Koons.';
                    playing = true;
                }, 15500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">b...o.. d..</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 17500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">b..lo.. d..</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 19500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">b..lo.. do.</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 21500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">ba.lo.. do.</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 23500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">ba.lo.n do.</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 25500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">ba.loon do.</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 27500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">balloon do.</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 29500);
                setTimeout(() => {
                    question.innerHTML = 'De <b style="color: Tomato;">balloon dog</b> is het meest bekende kunstwerk van Jeff Koons.';
                }, 31500);
                setTimeout(() => {
                    question.innerHTML = 'Zin 2';
                }, 36500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">....</b>.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=2",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 39500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">....</b>.';
                }, 39500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">...5</b>.';
                }, 44500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">.9.5</b>.';
                }, 49500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">19.5</b>.';
                }, 54500);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren op 21 januari <b style="color: Tomato;">1955</b>.';
                }, 59500);
                setTimeout(() => {
                    question.innerHTML = 'Zin 3';
                }, 65500);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">......</b> is de bekenste kunststroming van Jeff Koons.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=3",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 68500);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">...a..</b> is de bekenste kunststroming van Jeff Koons.';
                }, 72000);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">p..a..</b> is de bekenste kunststroming van Jeff Koons.';
                }, 75500);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">p..a.t</b> is de bekenste kunststroming van Jeff Koons.';
                }, 78000);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">po.a.t</b> is de bekenste kunststroming van Jeff Koons.';
                }, 81500);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">po.a.t</b> is de bekenste kunststroming van Jeff Koons.';
                }, 83000);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">po.art</b> is de bekenste kunststroming van Jeff Koons.';
                }, 86500);
                setTimeout(() => {
                    question.innerHTML = '<b style="color: Tomato;">popart</b> is de bekenste kunststroming van Jeff Koons.';
                }, 89000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 4';
                }, 95000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">.........</b> van beroep.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=4",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 98000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">...n.....</b> van beroep.';
                }, 100000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">...n....r</b> van beroep.';
                }, 102000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">...n.s..r</b> van beroep.';
                }, 104000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">...n.s.er</b> van beroep.';
                }, 106000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">.o.n.s.er</b> van beroep.';
                }, 108000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">.orn.s.er</b> van beroep.';
                }, 110000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">.ornos.er</b> van beroep.';
                }, 112000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">.ornoster</b> van beroep.';
                }, 114000);
                setTimeout(() => {
                    question.innerHTML = 'De vrouw van Jeff Koons is <b style="color: Tomato;">pornoster</b> van beroep.';
                }, 116000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 5';
                }, 121000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">..........</b> leeftijd met kunst.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=5",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 124000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">.........e</b> leeftijd met kunst.';
                }, 126000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">....j....e</b> leeftijd met kunst.';
                }, 128000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">....ja...e</b> leeftijd met kunst.';
                }, 130000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">....ja..ge</b> leeftijd met kunst.';
                }, 132000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">....jar.ge</b> leeftijd met kunst.';
                }, 134000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">.c..jar.ge</b> leeftijd met kunst.';
                }, 136000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">.c..jarige</b> leeftijd met kunst.';
                }, 138000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">.c.tjarige</b> leeftijd met kunst.';
                }, 140000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">.chtjarige</b> leeftijd met kunst.';
                }, 142000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons begon al op <b style="color: Tomato;">achtjarige</b> leeftijd met kunst.';
                }, 144000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 6';
                }, 150000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">.......</b>.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=6",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 153000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">......n</b>.';
                }, 156000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">..o...n</b>.';
                }, 156000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">..o..en</b>.';
                }, 159000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">..o.men</b>.';
                }, 162000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">.lo.men</b>.';
                }, 165000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">blo.men</b>.';
                }, 168000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons maakte ook veel kunst met <b style="color: Tomato;">bloemen</b>.';
                }, 171000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 7';
                }, 176000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">... ....</b>.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=7",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 179000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">... .o..</b>.';
                }, 183000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">.e. .o..</b>.';
                }, 187000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">.e. .o.k</b>.';
                }, 191000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">ne. .o.k</b>.';
                }, 195000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">ne. .ork</b>.';
                }, 193000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">new .ork</b>.';
                }, 197000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons is geboren in <b style="color: Tomato;">new york</b>.';
                }, 200000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 8';
                }, 205000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. .......</b> op.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=8",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 208000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. m......</b> op.';
                }, 210000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. mi.....</b> op.';
                }, 212000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. mi.j...</b> op.';
                }, 214000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. milj...</b> op.';
                }, 216000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">.. miljo..</b> op.';
                }, 218000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">9. miljo..</b> op.';
                }, 220000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">9. miljo.n</b> op.';
                }, 222000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">9. miljoen</b> op.';
                }, 224000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons zijn meest waardevolle kunstwerk leverde <b style="color: Tomato;">91 miljoen</b> op.';
                }, 226000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 9';
                }, 231000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">......</b> meter hoog.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=9",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 234000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">.....f</b> meter hoog.';
                }, 238000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">..a..f</b> meter hoog.';
                }, 242000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">.wa..f</b> meter hoog.';
                }, 246000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">.waa.f</b> meter hoog.';
                }, 249000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">twaa.f</b> meter hoog.';
                }, 252000);
                setTimeout(() => {
                    question.innerHTML = 'Jeff Koons had een kunstwerk in de vorm van een hond van wel <b style="color: Tomato;">twaalf</b> meter hoog.';
                }, 255000);
                setTimeout(() => {
                    question.innerHTML = 'Zin 10';
                }, 260000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.........</b>.';
                    bottom.innerHTML = 100000;
                    Timer = true;
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=10",
                        cache: false,
                        datatype: "json",
                    });
                    activateTimer();
                }, 263000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.e.......</b>.';
                }, 265000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ed....n.</b>.';
                }, 268000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ed....n.</b>.';
                }, 271000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ede...n.</b>.';
                }, 273000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ede.l.n.</b>.';
                }, 276000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ede.l.nd</b>.';
                }, 278000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ede.land</b>.';
                }, 280000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">.ederland</b>.';
                }, 283000);
                setTimeout(() => {
                    question.innerHTML = 'het kunst werk ushering in banality zorgde er voor dat Jeff Koons bekent werd in <b style="color: Tomato;">Nederland</b>.';
                }, 286000);
                setTimeout(() => {
                    $.ajax({
                        type: "get",
                        url:"../backend/game2data?zin=11",
                        cache: false,
                        datatype: "json",
                    });
                    location.replace('game2done');
                }, 289000);
                


                setInterval(function() {
                    if (playing) {
                        $.ajax({
                            type: "get",
                            url:"../backend/game2data",
                            cache: false,
                            datatype: "json",
                            success: function(data) {
                                if (data != 'none')
                                array = JSON.parse(data);
                                for (var i=0; i < array['playerName'].length; i++) {
                                    name = array['playerName'][i];
                                    money = array['gameData'][i];
                                }
                                moneyText.innerHTML = name + ": + €" + money;
                            }
                        });
                    }
                }, 500);
            });

            var i = 1;

            function activateTimer() {
                setTimeout(function() {
                    bottom.innerHTML = '€ ' + (parseInt(bottom.innerHTML.replace('€ ', '')) - 500);
                    i++;
                    if (Timer && parseInt(bottom.innerHTML.replace('€ ', '')) != 0) {
                        activateTimer();
                    }
                }, 100);
            }
        </script>
    </body>

    <div class="footer">
        <h1 class="instructions" id="money" style="font-size: 3vw;"></h1>
    </div>

</html>