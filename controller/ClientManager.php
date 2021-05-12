<?php

require_once("model/Model.php");

class ClientManager
{  
    public function insertToDb($id, $firstName, $lastName, $email, $password)
    {
        $database = new DbManager();
        $db = $database->database;
        $client = $db->prepare("INSERT INTO clients(id, firstName, lastName, email, password) VALUES(?, ?, ?, ?, ?)");
        $data = $client->execute(array($id, $firstName, $lastName, $email, $password));
        return $data;
    }
}
    