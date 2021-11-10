<?php

class RegisterFunctions extends Database {
    
    protected function insertUser($firstname, $lastname, $password, $email, $date) {
        
        if($this->checkEmail($email)) {
            try {
                $sql = "INSERT INTO `users`(`firstname`,`lastname`, `password`, `email`, `registrationDate`) VALUES ('$firstname','$lastname', '$password', '$email', '$date')";
                $this->connect()->exec($sql);
             } catch(PDOException $e) {
                 echo $sql . "<br>" . $e->getMessage();
             }
        } 
        
    }

    protected function checkEmail($email) {
        
        try{
            $sql = $this->connect()->prepare('SELECT * from `users` WHERE email = ?');
            $sql->execute([$email]); 

            if($sql->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
            
         } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
         }
    }
}