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
        <p>Telefoonnummer: 0612589462</p>
        <p>Email: teamaubergine@codecamp.nl</p>
<<<<<<< Updated upstream
    </div>
</div>
=======
    </div>

    <div class="info2">
        <p>Team Aubergine</p>
        <p>Telefoonnummer: 0612589462</p>
        <p>Email: teamaubergine@codecamp.nl</p>
    </div>
</div>


>>>>>>> Stashed changes
    <div class="datetime-box">
        <div class="date">
            <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
            </script>
        </div>
<<<<<<< Updated upstream
        <div class="timedisplay">
=======

>>>>>>> Stashed changes
            <script>
                var dt = new Date();
                document.getElementById("time").innerHTML = dt.toLocaleTimeString();
            </script>
<<<<<<< Updated upstream
        </div>
=======
>>>>>>> Stashed changes
        </div>
        </div>
    </div>
</html>