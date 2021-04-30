<?php
    require_once("view/header.php");
    require_once("view/body.php");
    require_once("view/footer.php");
    require_once("model/Model.php");

    try{
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'addClient') {
                $client = new DbManager;
                $client->insertToDb($id, $firstName, $lastName, $email, $password);
            }
    
        }
    }
    catch(Exception $e){
        echo 'Erreur : ' . $e->getMessage();
    }