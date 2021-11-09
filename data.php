<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
<?php
require_once 'header.php' 
?>          
        <?php require_once 'backend/conn.php'; 
                    $query = "SELECT * FROM songs WHERE name='Killer Queen'";
                    $statement = $conn -> prepare($query);
                    $statement->execute();
                    $songs = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
        ?>
        <?php foreach($songs as $song): ?>
            <tr>
                            <td><?php echo $song['name']; ?></td><br>
                            <td><?php echo $song['artist']; ?></td><br>
                            <td><?php echo $song['songtext']; ?></td><br>
                            <br>
            </tr>
            <?php endforeach; 
        ?>
<?php
require_once  'footer.php'
?>


</body>
</html>

    
    