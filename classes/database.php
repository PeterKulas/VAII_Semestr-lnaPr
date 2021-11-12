<?php

class Database {
    
    protected function connect() {
        try {
            $server = "db";
            $user = "db_user";
            $password = "db_user_pass";
            $database = "dbtable";
            
            $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
            return $connection;    
       } catch(PDOException $e) {
           echo "Connection failed: " . $e->getMessage();
           die();
       }
    }
}