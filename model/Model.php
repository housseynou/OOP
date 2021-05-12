<?php

    class DbManager{
        
        protected function database(){
            $database = new PDO('mysql:host=localhost;dbname=oop-db;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $database;
        }

        
    }
