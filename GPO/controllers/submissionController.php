<?php
session_start();
require __DIR__ . "/../includes/DB.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $answers = $_POST;
    $session_id = $_SESSION['id'];

    foreach($answers as $key => $value)
    {
        $sql = "INSERT INTO submissions (submitter_id, question_id, answer) VALUES (:sess_id, :k, :v )";
        $q = $db->prepare($sql);
        $q->bindParam(':sess_id', $_SESSION['id']);
        $q->bindParam(':k', $key);
        $q->bindPAram(':v', $value);
        $q->execute();
    }

}