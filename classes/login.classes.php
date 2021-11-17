<?php

class Login extends Database {
    
    protected function loginsUser($password, $email) {
        
        if($this->checkUser($email, $password)) {
            $sql = $this->connect()->prepare('SELECT - from `users` WHERE email = ? AND "password" = ?;');
            $sql->execute([$email, $password]); 

            $hashedPassword = $sql->fetchAll(PDO::FETCH_ASSOC);
            $validPassword = password_verify($password, $hashedPassword[0]["password"]); //StackOverFlow

            if($validPassword) {
                session_start();
                $_SESSION["emailSess"] = $email;
                $_SESSION["passwordSess"] = $password;
            } else {
                header("location: ../Pages/loginPage.php?error=wrongPassword");
            }

        } else {
            header("location: ../Pages/loginPage.php?error=userDoesntExist");
        }
    }

    private function checkUser($email, $password) {
        try{
            $sql = $this->connect()->prepare('SELECT * from `users` WHERE email = ? AND password = ?;');
            $sql->execute([$email, $password]); 

            if($sql->rowCount() == 0) {
                return false;
            } else {
                return true;
            }           
         } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
         }
    }

}