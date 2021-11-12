<?php

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"];    
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $email = $_POST["email"];

     include "../classes/database.php";
     include "../classes/register.classes.php";
     include "../classes/registerController.php";

    $register = new RegisterController($firstname, $lastname, $password, $repassword, $email);
    $register->registerUser();
    
    header("location: ../registrationPage.php?error=none");

}