<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr No</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="drno">
    <h1>Dr No</h1>
        <p>Dr. No is het zesde boek van Ian Fleming over James Bond, verschenen in 1958. De verfilming van dit boek is de eerste James Bondfilm die geproduceerd is door EON productions. De Nederlandse titel is hetzelfde.</p>
        <br>
        <img src="../img/drno.jpg" alt="Dr No">

    <h2>Auteur:</h2>
    <p> Ian Flemming</p>

    <h2>Aantal bladzijdes:</h2>
    <p> 286</p>

    <h2>Verhaal</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
        <p>Het vorige boek, From Russia with Love, eindigde met een cliffhanger, waarin Bond vergiftigd werd door Rosa Klebb. In het begin van deze roman wordt onthuld hoe Bond dit overleefd heeft: het gif was tetrodotoxine, en zou Bond gedood hebben door verlamming. René Mathis heeft Bond echter kunstmatig beademd, zodat Bond niet stikte; de arts die er snel bij geroepen werd kwam uit Afrika en had ervaring met vergiftigingen. Met deze hulp en heel veel geluk heeft Bond het ternauwernood overleefd.</p>
        <p>Terug in dienst wordt Bond naar Jamaica gestuurd, om uit te zoeken wat er met John Strangways, het hoofd van Station J, gebeurd is. Strangways en diens secretaresse zijn verdwenen, maar M denkt dat de twee er gewoon vandoor gegaan zijn, en gaat er uit van een routine-onderzoek.</p>
        <p>Bond maakt contact met zijn oude vriend Quarrel, maar ontdekt al snel dat er sprake is van allesbehalve routine. Hij wordt bespied, en zijn kamer wordt doorzocht. Er wordt een mand met vergiftigd fruit bezorgd, en 's nachts ontsnapt Bond aan de dood als er een giftige duizendpoot in zijn bed gelegd blijkt te zijn. Quarrel heeft Bond uitgelegd dat Strangways onderzoek deed naar het eiland Crab Key, eigendom van een zekere Dr. Julius No, die daar een guano-handel bedrijft.. Volgens het lokale bijgeloof woont er een draak op het eiland, want er zijn al meerdere mensen verdwenen.</p>
        <p>Bond en Quarrel gaan naar het eiland. 's Ochtends vroeg ontmoeten ze schelpenduikster Honeychile Rider op het strand. Al snel worden ze aangevallen door mannen van Dr. No, en vluchten ze landinwaarts. Daar ontmoeten ze de "draak": een moerasbuggy met een ingebouwde vlammenwerper. Quarrel wordt met het wapen gedood, en Bond en Honey worden gevangengenomen en voor Dr. No geleid.</p>
        <p>Dr. No bewondert Bond na al zijn ontsnappingen en vertelt hem zijn levensverhaal. Hij is van Duits-Chinees bloed en werkte oorspronkelijk voor een Chinese Tong. Nadat hij een miljoen aan goud van zijn meesters had gestolen hakten deze zijn handen af en schoten hem neer, maar Dr. No overleefde omdat zijn hart aan de rechterkant zat. Eenmaal rijk geworden nam hij de naam Julius No aan, werd geleerd en kocht uiteindelijk Crab Key. Dr. No regeert het eilandje als zijn eigen kleine koninkrijk: niemand die het betreedt zal het verlaten. Hij kan zijn veiligheid goed garanderen door een netwerken van agenten op Jamaica, en het handig ensceneren van ongelukken bij inspecties. Er zit echter meer achter het hele eiland: Dr. No saboteert Amerikaanse raketproeven door de raketten om te leiden - werk waarvoor de Sovjet-Unie hem goed betaalt.</p>
        <p>Dr. No besluit Honey en Bond op creatieve wijze te executeren. Bij wijze van experiment wordt Bond een lange gang vol hindernissen in gejaagd, waarbij hij onder meer wordt blootgesteld aan grote hitte, elektrische schokken en vogelspinnen. Hiermee wordt Bonds uithoudingsvermogen getest. De zeer goed geoefende Bond doorstaat alles, mede dankzij wat wapens die hij meegesmokkeld heeft: een mes, een aansteker en de spijl van een traliehek. Aan het einde van de gang komt Bond in een bassin terecht, waarin een gevangen reuzeninktvis zit. Dankzij zijn doorzettingsvermogen en zijn wapens slaagt Bond erin het dier te verwonden, en te ontsnappen. Bond treft Dr. No vervolgens aan bij een machine die guano inlaadt. Bond kaapt de machine en begraaft Dr. No levend onder de guano. Honey, die was vastgebonden om door krabben te worden opgegeten, is zelf al ontsnapt, omdat de krabben haar niets deden. Bond en Honey ontsnappen samen in de drakenbuggy.</p>
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
    <br>
</div>
<?php

    require_once  '../footer.php'
    ?>


</body>
</html>