<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image">   -->
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Aubergine</title>
</head>
<body>
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
            <p>Team Aubergine</p>
            <p>Telefoonnummer: 0612589462</p>
            <p></p>
            <p></p>
        </div>
    </div>
</body>
</html>