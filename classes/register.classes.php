<?php

class RegisterClass extends RegisterFunctions {

    private $firstname;
    private $lastname;
    private $password;
    private $repassword;
    private $email;

    public function __construct($firstname, $lastname, $password, $repassword, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->email = $email;
    }

    public function registerUser() {
        if($this->emptyInput() == true) {
            header("location: ../registrationPage/php?error=emptyInput");
            exit();
        }
        if($this->samePasswords() == true) {
            header("location: ../registrationPage.php?error=samePasswords");
            exit();
        }
        if($this->invalidEmail() == true) {
            header("location: ../registrationPage/php?error=invalidEmail");
            exit();
        }
        if($this->emailExist() == true) {
            header("location: ../registrationPage/php?error=emailExist");
            exit();
        }

        $date = date('Y/m/d H:i:s');
        $this->insertUser($this->firstname, $this->lastname, $this->password, $this->email, $date);
    }

    private function emptyInput() {
        $result = false;
        if( empty($this->firstname) || empty($this->lastname) || empty($this->password) 
            || empty($this->repassword) || empty($this->email)) 
        {
            $result = true;        
        } 
        return $result;
    }

    private function samePasswords() {
        $result = false;
        if($this->password !== $this->repassword) {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        return $result;
    }
    
    private function emailExist() {
        $result = true;
        if($this->checkEmail($this->email)) {
            $result = false;
        }
        return $result;
    }
}