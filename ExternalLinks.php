<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>External Links</title>
</head>
<body>
    <header>
        <?php
        require_once 'header.php'
        ?>
    </header>
    <div class="externelinks">
    <form>
        <div class="externelink">
            <p>link naar IMDB</p>
                <input type="button" value="IMDB" 
                onclick="window.location.href='https://www.IMDB.com'" />
            </div>
        
        <div class="externelink">
            <p>Link naar Videoland</p>
        <input type="button" value="Videoland" 
        onclick="window.location.href='https://www.Videoland.com'" />
        </div>

        <div class="externelink">
            <p>Link naar Fandango</p>
        <input type="button" value="Fandango" 
        onclick="window.location.href='https://www.fandango.com/'" />
        </div>
        </form> 
    </div>
</body>
</html>