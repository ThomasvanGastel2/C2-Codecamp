<?php require_once 'backend/conn.php'; 
            $query = "SELECT * FROM songs";
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
    <?php endforeach; ?>
    
    