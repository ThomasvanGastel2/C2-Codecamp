<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter en de Steen der Wijzen</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
<div class="harrypotter">
    <h1>Harry Potter en de Steen der Wijzen</h1>
        <p>Harry Potter en de Steen der Wijzen is het eerste deel van de populaire Harry Potterserie en is net zoals de zes opvolgende delen geschreven door de Britse schrijfster J.K. Rowling. De verhalen beschrijven het leven van een jonge tovenaar, genaamd Harry Potter. De originele titel van het boek luidt: Harry Potter and the Philosopher's Stone. Het boek werd in 2001 verfilmd.</p>
        <br>
        <img src="../img/steenderwijzen.jpg" alt="kaft van het boek Harry Potter en de Steen der Wijzen ">

    
    
    
    <h2>Auteur:</h2>
    <p>J.K. Rowling</p>

    <h2>Aantal bladzijdes:</h2>
    <p>256</p>
    
    
    
    
    <h2>Samenvatting</h2>
    <p>PAS OP: SPOILER!!!</p>
    <button name="spoiler_button" id="spoiler_button" type="button">Show Spoilers</button>

    <div id="spoiler_text" class="fadeout" >
    <p>De jonge Harry Potter woont na de dood van zijn ouders bij zijn oom en tante, waar hij slecht wordt behandeld en voortdurend de pesterijen van zijn verwende neefje moet ondergaan. Op zijn elfde verjaardag verneemt Harry dat zijn ouders machtige tovenaars waren en dat ook hij unieke magische krachten heeft. Hij vertrekt naar een Britse kostschool voor leerling-tovenaars, waar hij heel wat vrienden maakt die net als hij speciale krachten hebben.</p>
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
</p>
    
</div>
<?php

    require_once  '../footer.php'
    ?>


</body>
</html>