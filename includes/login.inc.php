<?php

if (isset($_POST["submit"])) {
    
    $password = $_POST["password"];
    $email = $_POST["email"];

     include "../classes/database.php";
     include "../classes/login.classes.php";
     include "../classes/loginController.php";

    $register = new LoginController($password, $email);
    $register->loginUser();
    
    header("location: ../loginPage.php?error=none");

}