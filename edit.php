<!doctype html>
<html lang="nl">

<head>
    <title>Prijs aanpassen</title>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <div class="admin">
        <h1>Boek aanpassen</h1>

        <?php
        $id = $_GET['id'];

        //1. Haal de verbinding erbij
        require_once 'backend/conn.php';

        $query = "SELECT * FROM boeken WHERE id = :id";


        $statement = $conn->prepare($query);

        $statement->execute([
            ":id" => $id
        ]);


        $boek = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        

        <form action="../backend/taskController.php" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?php echo $boek['titel']; ?>" class="form-input" >
            </div>

            <div class="form-group">
                <label for="beschrijving">Prijs</label>
                <input type="text" name="beschrijving" value="<?php echo $boek['prijs']; ?>">
            </div>

            
            
            <div class="form-input">
                <input type="submit" value="Aanpassing opslaan">
            </div>

        </form>
        <!-- <form action="../backend/taskController.php" method="POST">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-input">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id"value=" <?php echo $id; ?>">
            <input type="submit" value="Verwijderen"> -->
    </div>

    </form>
    </div>
            
       

 

</body>

</html>
