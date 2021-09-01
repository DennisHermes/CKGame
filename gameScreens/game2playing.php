<html>

	<head>
		<link rel="stylesheet" href="../css/usernameForm.css">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>

	<body>
		<ul>
			<li>
				<div class="content">
					<input type="text" placeholder="Type hier je woord" id="woord" size="20" maxlength="20" style="display: none;" required/>
					<br><br>
					<input type="submit" onclick="return submit();" value="Verzend antwoord!">
				</div>
			</li>
		<ul>

        <script>
            var correct = 'balloon dog';
            var Timer = false;
            var zin = '';

            setInterval(function() { 
                $.ajax({
                    type:"post",
                    url:"../backend/dataReference.php",
                    datatype:"json",
                    cache: false,
                    success: function(data) {
                        var obj = JSON.parse(data);
                        if (obj.GameStatus == 'zin1') {
                            if (zin != 'zin1') {
                                correct = 'balloon dog';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin1';
                            }
                        } else if (obj.GameStatus == 'zin2') {
                            if (zin != 'zin2') {
                                correct = '1955';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin2';
                            }
                        } else if (obj.GameStatus == 'zin3') {
                            if (zin != 'zin3') {
                                correct = 'popart';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin3';
                            }
                        } else if (obj.GameStatus == 'zin4') {
                            if (zin != 'zin4') {
                                correct = 'pornoster';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin4';
                            }
                        } else if (obj.GameStatus == 'zin5') {
                            if (zin != 'zin5') {
                                correct = 'achtjarige';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin5';
                            }
                        } else if (obj.GameStatus == 'zin6') {
                            if (zin != 'zin6') {
                                correct = 'bloemen';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin6';
                            }
                        } else if (obj.GameStatus == 'zin7') {
                            if (zin != 'zin7') {
                                correct = 'new york';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin7';
                            }
                        } else if (obj.GameStatus == 'zin8') {
                            if (zin != 'zin8') {
                                correct = '91 miljoen';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin8';
                            }
                        } else if (obj.GameStatus == 'zin9') {
                            if (zin != 'zin9') {
                                correct = 'twaalf';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin9';
                            }
                        } else if (obj.GameStatus == 'zin10') {
                            if (zin != 'zin10') {
                                correct = 'nederland';
                                document.getElementById("woord").style.display = "block";
                                monney = 90000;
                                Timer = true;
                                activateTimer();
                                document.getElementById("woord").value = '';
                                zin = 'zin10';
                            }
                        } else if (obj.GameStatus == 'game2done') {
                            location.replace('position2');
                        }
                    }
                });
            }, 1000);

            function submit() {
                if (correct.toUpperCase() == document.getElementById("woord").value.toUpperCase()) {
                    document.getElementById("woord").style.display = "none";
                    document.getElementById("woord").style.borderColor = "green";
                    $.ajax({
                        type:"post",
                        url:"../backend/game2pointer.php?money=" + monney + "",
                        datatype:"json",
                        cache: false,
                    });
                } else {
                    document.getElementById("woord").style.borderColor = "red";
                }
            }

            function activateTimer() {
                setTimeout(function() {
                    monney = monney - 500;
                    if (Timer && monney != 0) {
                        activateTimer();
                    }
                }, 100);
            }
        </script>
	<body>

</html>