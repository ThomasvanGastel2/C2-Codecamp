<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wurgtechnieken</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="drno">
    <h1>Wurgtechnieken</h1>
    <p>Het thema van het boek is de tegenstelling tussen het ongerepte, dromerige, ontwakende kinderbewustzijn en de wreedheid van de Tweede Wereldoorlog, de wereld van de volwassenen. Bijvoorbeeld: De duitse soldaten bieden Waldo en Vera aan om met hun mee te rijden naar Antwerpen, maar voeren Waldo dronken en vergrijpen zich aan Vera.</p>
    <br>
    <img src="../img/wurg.jfif" alt="dartvader">

    <h2>Auteur:</h2>
    <p> Ward Ruyslinck</p>

    <h2>Aantal bladzijdes:</h2>
    <p> 205</p>

    <h2>Verhaal</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
    <p>Pearl en Bruce Clayton waren gevlucht uit Bolivië naar België, omdat Bruce in Bolivië als politiek vluchteling werd beschouwd. Zijn beroep van professioneel folteraar en wurger liet hem niet meer toe om daar te blijven, wegens de hervorming van de staatsvorm naar democratie. Hier in België leefden Pearl en Bruce ondergedoken in een flat, en ze waren van plan om te vluchten naar Rhodesië, met de hulp van Andrew, een ambtenaar bij de Europese gemeenschap. Bruce kon echter niet aan de verleiding weerstaan, en wurgde ook Pearl. Tijdens de lijkschouwing echter bleek dat de dokter al eerder had kennisgemaakt met Bruce en Pearl, maar elk op een andere dag. De dokter kon dankzij zijn scherp geheugen een persoonsbeschrijving geven, en Bruce werd opgepakt aan de luchthaven. In de gevangenis werd hij door de CIA gecontacteerd, en hij werd ook een baan aangeboden</p>
    </div>
    <script>
        var divToggleVis = document.getElementById('spoiler_text');
    var button = document.getElementById('spoiler_button');
    divToggleVis.style.visibility = 'hidden';

    button.onclick = function() {
        if (divToggleVis.className === 'fadeout') {
            divToggleVis.className = 'fadein';
            divToggleVis.style.visibility = 'visible';
        } else {
            divToggleVis.style.visibility = 'hidden';
            divToggleVis.className = 'fadeout';
        }

        if (button.innerHTML === 'Show Spoilers') {
            button.innerHTML = 'Hide Spoilers';
        } else {
            button.innerHTML = 'Show Spoilers';
        }
    };
    </script>
</div>
<?php

    require_once  '../footer.php'
    ?>


</body>
</html>