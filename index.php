<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image">   -->
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'header.php'
    ?>
    <div class="content">

<div class="text">

    <h1><span id="datetime"></span></h1>
    <h1><span id="time"></span></h1>


    <script>

        var dt = new Date();

        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();

    </script>

    <script>
        var dt = new Date();
        document.getElementById("time").innerHTML = dt.toLocaleTimeString();
    </script>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam ea nobis adipisci nemo perspiciatis doloremque illo! Porro eligendi veniam, perferendis ipsa alias, impedit dolores voluptatem, fugiat omnis maiores itaque.</p>
</body>
</html>