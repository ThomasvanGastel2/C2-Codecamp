<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boeken</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
    
    <div class="boeken">
    <h1>Boeken</h1>
        <ul>
            <a href="<?php echo $base_url; ?>/boeken/harrypotter.php">Harry Potter en de steen der Wijzen - JK Rowling</a><br>
            <a href="<?php echo $base_url; ?>/boeken/hitchhikers.php">Hitchhikers guide tot het Universem - Douglas Adams</a><br>
            <a href="<?php echo $base_url; ?>/boeken/oorlog.php">Oorlog en vrede - Tolsjoy</a><br>
            <a href="<?php echo $base_url; ?>/boeken/moonraker.php">Moonraker - Ian Flemming</a><br>
            <a href="<?php echo $base_url; ?>/boeken/drno.php">Dr No - Ian Flemming</a><br>
            <a href="<?php echo $base_url; ?>/boeken/turksfruit.php">Turks Fruit - Jan Wolkers</a><br>
            <a href="<?php echo $base_url; ?>/boeken/wurgtechnieken.php">Wurgtechnieken - Ward Ruislink</a><br>
        </ul>
    </div>                  
                        

<?php

    require_once  '../footer.php'
    ?>


</body>
</html>