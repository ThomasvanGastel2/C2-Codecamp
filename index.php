<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <script src="script.js" async></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Aubergine</title>
</head>
<body onload="startTime()">
    <?php
    require_once 'header.php'
    ?>
    <div class="content">

    <div class="text">
        <h1><span id="datetime"></span></h1>
        <h1><span id="time"></span></h1>
    </div>

    <div class="datetime-box">
        <div class="date">
            <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
            </script>
        </div>

        <div class="timedisplay">
            <script>
                var dt = new Date();
                document.getElementById("time").innerHTML = dt.toLocaleTimeString();
            </script>
        <div class="contactgegevens">   
            <p>Team Aubergine</p>
            <p>Telefoonnummer: 0612589462</p>
            <p>Email: teamaubergine@codecamp.nl</p>
            <p>Adres: Paleis Noordeinde </p>
            <p>2500 GK Den Haag</p>
            <p>Postbus 30412</p>
        </div>
        </div>
    </div>
    </div>
    <?php
    require_once 'footer.php'
    ?>
</body>
</html>