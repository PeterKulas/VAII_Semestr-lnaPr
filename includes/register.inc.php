<?php

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"];    
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $email = $_POST["email"];

     include "../classes/database.classes.php";
     include "../classes/registerFunctions.php";
     include "../classes/register.classes.php";
  
    //include "classes/database.classes.php";
    // include "classes/registerFunctions.php";
    //include "classes/register.classes.php";

    $register = new RegisterClass($firstname, $lastname, $password, $repassword, $email);

    $register->registerUser();

    header("location: ../registrationPage.php?error=none");
    //header("location: registrationPage.php?error=none");
}