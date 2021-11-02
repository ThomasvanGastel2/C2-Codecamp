<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songteksten</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
    
    <div class="songteksten">
    <h1>Songteksten</h1>
        <ul>
            <li><a href="<?php echo $base_url; ?>/Songteksten/BR_Queen.php">Queen - Bohemian Rapsody</a></li><br>
            <li><a href="<?php echo $base_url; ?>/Songteksten/KQ_Queen.php">Queen - Killer Queen </a></li><br> 
            <li><a href="<?php echo $base_url; ?>/Songteksten/Madness_Muse.php">Muse - Madness</a></li><br>
            <li><a href="<?php echo $base_url; ?>/Songteksten/Uprising_MyBaby.php">My Baby - Uprising</a></li> <br> 
            <li><a href="<?php echo $base_url; ?>/Songteksten/Uprising_Muse.php">Muse - Uprising</a></li><br>
            <li><a href="<?php echo $base_url; ?>/Songteksten/PIB_Muse.php">Muse - Plug in baby</a></li>  <br>
            <li><a href="<?php echo $base_url; ?>/Songteksten/WATC_Queen.php ">Queen - We are the champions</a></li> <br>
        </ul>
    </div>                  
                        

<?php

    require_once  '../footer.php'
    ?>


</body>
</html>