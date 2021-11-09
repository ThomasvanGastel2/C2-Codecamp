<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitchhikers</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="hitchhikers">
    <h1>The Hitchhiker's Guide to the Galaxy</h1>
        <p>The Hitchhiker's Guide to the Galaxy[note 1] (sometimes referred to as HG2G,[1] HHGTTG,[2] H2G2,[3] or tHGttG) is a comedy science fiction franchise created by Douglas Adams. Originally a 1978 radio comedy broadcast on BBC Radio 4, it was later adapted to other formats, including stage shows, novels, comic books, a 1981 TV series, a 1984 video game, and 2005 feature film.</p>
        <br>
        <img src="../img/hitchhikers.jpg" alt="hitchhikers">

        <h2>Auteur: </h2>
        <p>Douglas Adams</p>

        <h2>Aantal bladzijdes</h2>
        <p>224</p>
        

    <h2>Verhaal</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
        <p>De eerste radioserie komt van een voorstel genaamd "The Ends of the Earth": zes op zichzelf staande afleveringen, die allemaal eindigen met de vernietiging van de aarde op een andere manier. Tijdens het schrijven van de eerste aflevering realiseerde Adams zich dat hij iemand op de planeet nodig had die een alien was om wat context te bieden, en dat deze alien een reden nodig had om daar te zijn. Adams besloot uiteindelijk van het buitenaardse wezen een rondtrekkende onderzoeker te maken voor een "heel opmerkelijk boek" genaamd The Hitchhiker's Guide to the Galaxy. Naarmate het schrijven van de eerste radio-aflevering vorderde, werd de Gids het middelpunt van zijn verhaal, en hij besloot de serie daarop te concentreren, met de vernietiging van de aarde als enige overblijfsel.[13]
        </p>    
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