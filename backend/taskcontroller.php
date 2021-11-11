<?php 
$action = $_POST['action'];   

if($action == "update")
{
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $prijs = $_POST['prijs'];


    require_once 'conn.php';

    $query = " UPDATE boeken SET id = :id, titel = :titel, prijs = :prijs";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":id" => $id,
        ":titel" => $titel,
        ":prijs" => $prijs,

    ]);

    Header("Location: admin.php?msg=Wijziging opgeslagen");
}
?>