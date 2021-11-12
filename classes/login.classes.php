<?php

class Login extends Database {
    
    protected function loginsUser($password, $email) {
        
        if($this->checkEmail($password, $email)) {


        } else {
            header("location: ../Pages/loginPage.php?error=userDoesntExist");
        }
    }

    private function checkEmail($email) {
        try{
            $sql = $this->connect()->prepare('SELECT "password" from `users` WHERE email = ?');
            $sql->execute([$email]); 

            if($sql->rowCount() == 0) {
                return false;
            } else {
                return true;
            }           
         } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
         }
    }

    private function checkPassword($password) {
        $enteredPassword = 
    }
}