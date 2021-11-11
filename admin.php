<html>

<?php

    require_once 'backend/conn.php';

    $query = "SELECT * FROM boeken";

    $statement = $conn->prepare($query);

    $statement->execute();

    $boeken = $statement->fetchAll(PDO::FETCH_ASSOC);

    require_once 'header.php'

    ?>



<body>

    <div class="admin">
        <!-- <form action="" method="GET">
        <select name="afdeling" >
            <option value=""> Kies een categorie</option>
            <option value="songteksten">songteksten</option>
            <option value="boeken">boeken</option>
        </select>
        <input type="submit" value="filter">
            </form>     -->

        <table>
            <tr>
                <th>Id</th>
                <th>Titel</th>
                <th>Prijs</th>
            </tr>
            <?php foreach($boeken as $boek): ?>
                <tr>
                    <td><?php echo $boek['id']; ?></td>
                    <td><?php echo $boek['titel']; ?></td>
                    <td><?php echo $boek['prijs']; ?></td>

                    <td><a href="edit.php?id=<?php echo$boek['id']; ?>">aanpassen</a></td>
                </tr>
            <?php endforeach?>    
        </table>

    </div>
</body>
<?php
    require_once 'footer.php'
    ?>
</html>
