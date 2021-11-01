<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereedschap</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
    
    <div class="gereedschappen">
    <h1>Gereedschap</h1>
        <ul>
            <a href="<?php echo $base_url; ?>/zagen/zagen.php">Zagen</a><br>
            <a href="<?php echo $base_url; ?>/gereedschap/hamers.php">Hamers</a><br> 
            <a href="<?php echo $base_url; ?>/gereedschap/Schroevendraaiers.php">Schroevendraaiers</a><br>
        </ul>
    </div>                  
                        

<?php

    require_once  '../footer.php'
    ?>


</body>
</html>