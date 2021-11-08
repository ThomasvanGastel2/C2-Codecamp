<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonraker</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="moonraker">
    <h1>Moonraker</h1>
        <p>Moonraker is de derde roman over James Bond van de Engelse schrijver Ian Fleming. Het boek verscheen in 1955 en werd verfilmd in 1979 met Roger Moore als James Bond. De Nederlandse titel van het boek is Hoog spel.</p>
        <br>
        <!-- <img src="../img/darthvader.png" alt="dartvader"> -->

        <h2>Auteur: </h2>
        <p>Ian Flemming</p>

        <h2>Aantal bladzijdes</h2>
        <p>352</p>

        <h2>Verhaal</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
        <p>M vraagt aan James Bond of hij meegaat naar de Blades Club om daar de multimiljonair en oorlogsheld Hugo Drax te observeren. Drax leidt het 'Moonraker'-ruimteproject dat gebouwd wordt om het Verenigd Koninkrijk tegen zijn vijanden van de Koude Oorlog te verdedigen. Hij wordt verdacht van het valsspelen bij bridge bij Blades. Wat M niet begrijpt is waarom Drax vals zou spelen en Bond zoekt dat uit door samen met M te dineren bij Blades. Bond slaagt er bij Blades in de bedrieger te bedriegen, met de hulp van een cocktail van gepoederde benzedrine. Bond wint hierbij 15.000 pond.

Diezelfde nacht nog vindt er een moord plaats op de werf van de Moonraker. De bewakingsofficier, een agent van de Special Branch van Scotland Yard, wordt doodgeschoten. Ofschoon de zaak in handen van MI5 zou zijn, slaagt M erin om Bond te laten infiltreren bij Drax, en Bond ontmoet hierbij de politieagente Gala Brand die ook werkt bij de Special Branch.

Bond en Gala ontdekken dat Drax niet is wie hij lijkt te zijn. In werkelijkheid is hij de Duitse graaf Hugo von der Drache, die, als lid van de Duitse weerwolven, tijdens de Tweede Wereldoorlog per ongeluk in een Brits hospitaal belandde dat zijn mannen later bombardeerden, waarbij het grootste deel van zijn gezicht werd weggeblazen. Zinnend op wraak nam hij de identiteit over van een verdwenen Britse soldaat en werd Brits oorlogsheld en multimiljonair. Het blijkt dat hij nu plannen heeft om Londen te vernietigen met de Moonraker, als wraak op het land (Engeland) dat hij altijd gehaat heeft. Dit heeft hij voor elkaar kunnen krijgen met geheime hulp van de Sovjet-Unie.

Net als de raket op het punt staat op te stijgen komen Bond en Gala tevoorschijn, Bond wijzigt de koers van de raket zodat de raket zich in de Noordzee werpt. Drax wordt dus gedood door zijn eigen raket, terwijl hij probeert te ontsnappen in een Russische onderzeeër. Wanneer de missie voltooid is slaagt Bond er niet in het meisje voor enige tijd te krijgen.</p>
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


    <h2>Trivia</h2>
    <ul>
        <li>Het script voor de gelijknamige film van dit boek werd geschreven door Christopher Wood, de film lijkt daarom ook weinig op Flemings Moonraker. Christopher Wood heeft alleen de naam van de slechterik Hugo Drax in de film gebruikt, maar in de film is Drax een Amerikaan, in het boek is hij een Duitser. Christopher Wood schreef daarom ook in 1979 een boek dat gebaseerd is op de film.</li>
        <li>Het personage Miranda Frost (uit de Bondfilm Die Another Day) is gebaseerd op het personage Gala Brand. Ook Gustav Graves (ook uit de Bondfilm Die Another Day) is gebaseerd op Hugo Drax, omdat ze beiden een ongeluk met hun gezicht hebben gehad, wat hun uiterlijk veranderde.</li>
    </ul>
</div>
<?php

    require_once  '../footer.php'
    ?>


</body>
</html>