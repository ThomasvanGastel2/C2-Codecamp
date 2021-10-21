<body onload="startTime()">
    <?php
    require_once 'header.php'
    ?>

<div class="content">
    <div class="text">
        <h1><span id="datetime"></span></h1>
        <h2>current date</h2>
        <h1><span id="time"></span></h1>
        <h2>current time</h2>
<div class="infobox">
    <div class="info">
        <p>Team Aubergine</p>
        <p>Adres: Koestraat 1</p>
        <p>Den Bosch</p>
        <p>Telefoonnummer: 0612589462</p>
        <p>Email: teamaubergine@codecamp.nl</p>
    </div>
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
        </div>
        </div>
        </div>
    </div>
    <?php
    require_once 'footer.php'
    ?>
</html>