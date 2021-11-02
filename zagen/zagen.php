<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zagen</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
    
    <div class="zagen">
    <h1>Zagen</h1>
        <ul>
            <a href="<?php echo $base_url; ?>/zagen/cirkelzagen.php">Cirkelzagen</a><br>
            <a href="<?php echo $base_url; ?>/zagen/Handzagen.php">Handzagen</a><br> 
        </ul>
    </div>                  
                        

<?php

    require_once  '../footer.php'
    ?>


</body>
</html>