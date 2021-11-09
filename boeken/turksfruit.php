<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TurksFruit</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="turksfruit">
    <h1>TurksFruit</h1>
        <p>Turks fruit is een liefdesroman van Jan Wolkers uit 1969. Centraal in het verhaal staan de relatie van de hoofdpersoon met zijn uit Alkmaar afkomstige vrouw Olga en de invloed die zij op hem heeft en heeft gehad. De roman is opgedragen aan Olga Stabulas</p>
        <br>
        <img src="../img/turksfruit.jpg" alt="turksfruit">


        <h2>Auteur: </h2>
        <p>Jan Wolkers</p>

        <h2>Aantal bladzijdes</h2>
        <p>156</p>

    <h2>Verhaal</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
        <p>Het verhaal begint als Erik (de hoofdpersoon) op bed ligt en terugdenkt aan zijn tijd met Olga. Erik ontmoet Olga als hij staat te liften. Ze krijgen een relatie, gaan samenwonen en trouwen uiteindelijk. Erik kijkt terug op de hoogtepunten uit hun relatie en vertelt over de verschillende gebeurtenissen uit Olga's leven. Olga’s vader is een wat tragikomische man die Erik wel aardig vindt. De vader van Olga is een zeer eenzame man. De moeder van Olga kan Erik niet uitstaan, ze is een vrouw die vreemdgaat, maar zich thuis voordoet als de goede, brave en perfecte echtgenote. Erik vertelt veel over de erg heftige seksuele relatie die hij met Olga had en die heel belangrijk voor hem was. Ook over de vakantie op Ameland en de keren dat Olga voor hem model stond wijdt Erik uit. Langzaamaan wordt er naar een zekere ondergang in  de relatie toegewerkt door de invloeden van Olga’s moeder . Als Olga tijdens een diner zit te flirten met een zakenrelatie van haar ouders, komt het keerpunt in hun relatie. Erik slaat Olga, waarna Olga hem verlaat en teruggaat naar haar moeder. Nadat Olga hem heeft verlaten, heeft Erik veel kortstondige relaties met andere vrouwen, die hij altijd met Olga vergelijkt waardoor niemand aan haar tippen. Erik verhuurt een kamer aan twee Amerikaanse meisjes, maar schopt ze er weer uit als hun vogels alles onder poepen. Olga trouwt twee keer en woont een aantal jaren in het buitenland. Ze reist veel en stuurt Erik kaartjes en brieven. De huwelijken van Olga lopen op niets uit. Soms komt Erik Olga in de stad tegen en praten ze wat met elkaar, maar hun gesprekken zijn niet meer als vroeger. Olga krijgt last van erge hoofdpijnen en het blijkt dat ze een hersentumor heeft. Door de vele bestralingen verliest Olga haar haren en koopt Erik een pruik voor haar. Erik bezoekt Olga elke dag in het ziekenhuis en ziet haar langzaamaan aftakelen. Ze durft niets meer te eten behalve Turks fruit omdat ze denkt dat haar voortanden er uit zullen vallen als ze iets hards eet. Erik koopt op de markt Turks fruit voor haar wat juist bekent staat om zijn notoire tandrot. Olga sterft op een vroege voorjaarsavond en wordt met haar pruik op gecremeerd.</p>
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