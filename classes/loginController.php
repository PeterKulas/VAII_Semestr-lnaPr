<?php

class LoginController extends Login {

    private $email;
    private $password; 

    public function __construct($password,$email)
    {
        $this->email = $email;
        $this->password = $password;  
    }

    public function loginUser() {
        if($this->emptyInput() == true) {
            header("location: ../Pages/loginPage.php?error=emptyInput");
            exit();
        } 

        $this->loginUser($this->password, $this->email);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->email) || empty($this->email)) 
        {
            $result = true;        
        } 
        return $result;
    }
}