<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acteurs</title>
</head>
<body>
    <?php
    require_once '../header.php'
    ?>
    
    <div class="acteurs">
    <h1>Acteurs</h1>
        <ul>
            <a href="<?php echo $base_url; ?>/acteurs/darthvader.php">Darthvader</a><br>
            <a href="<?php echo $base_url; ?>/acteurs/George_Clooney.php">George Clooney</a><br> 
            <a href="<?php echo $base_url; ?>/acteurs/jamesbond.php">James Bond</a><br>
            <a href="<?php echo $base_url; ?>/acteurs/lukeskywalker.php">Luke Skywalker</a> <br> 
            <a href="<?php echo $base_url; ?>/acteurs/Roger_Moore.php">Roger Moore</a><br>
            <a href="<?php echo $base_url; ?>/acteurs/timotydalto.php">Timoty Dalto</a>  <br>
        </ul>
    </div>                  
                        

<?php

    require_once  '../footer.php'
    ?>


</body>
</html>