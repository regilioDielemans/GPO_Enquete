<?php
session_start();
require __DIR__ . "/../includes/DB.php";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $name		= $_POST['name'];
    $email		= $_POST['email'];
    $location 	= $_POST['location'];

    switch ($location) {
        case 'winkel':
            $branche = 1;
            break;
        case 'restaurant':
            $branche = 2;
            break;

        case 'hotel':
            $branche = 3;
            break;

        case 'theater':
            $branche = 4;
            break;

        case 'bank':
            $branche = 5;
            break;

        case 'bibliotheek':
            $branche = 6;
            break;

        default:
            $branche = 1;
            break;
    }

    $sql  = "INSERT INTO submitters (company_name, email) VALUES (:name, :email)";
    $q = $db->prepare($sql);

    $q->bindParam(':name', $_POST['name']);
    $q->bindParam(':email', $_POST['email']);
    $q->execute();

    // get id for session
    $sql = "SELECT id FROM submitters where email = :email";
    $q = $db->prepare($sql);
    $q->bindParam(':email', $_POST['email']);
    $q->execute();

    $data = $q->fetch(PDO::FETCH_OBJ);
    $_SESSION['id'] = $data->id;

    header("location: ../enquete.php?location={$branche}");


}
?>