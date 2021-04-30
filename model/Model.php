<?php

    class DbManager{
        
        protected function database(){
            $database = new PDO('mysql:host=localhost;dbname=oop-db;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $database;
        }

        public function insertToDb($id, $firstName, $lastName, $email, $password){
            $database = $this->database();
            $client = $database->prepare("INSERT INTO clients(id, firstName, lastName, email, password) VALUES(?, ?, ?, ?, ?)");
            $data = $client->execute(array($id, $firstName, $lastName, $email, $password));
            return $data;
        }
    }
