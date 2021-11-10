<?php

require("connectDatabase.php");

 class Functions {
    private $database;

    public function __construct()
    {
       $this->database = new connectDatabase();
    }
    
    public function insertUser($firstname,$lastname, $passwordF, $email, $date) {
      
      try {
         $sql = "INSERT INTO `users`(`firstname`,`lastname`, `password`, `email`, `registrationDate`) VALUES ('$firstname','$lastname', '$passwordF', '$email', '$date')";
         $this->database->getConnection()->exec($sql);
      } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
      }
     }
 }
 ?>