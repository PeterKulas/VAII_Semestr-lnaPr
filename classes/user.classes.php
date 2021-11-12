<?php
require_once "User.model.php";
require_once "database.php";

class UserStorage extends Database {

    public function getAllUsers() {
        $sql ='SELECT * FROM users';
        $statement = $this->connect()->query($sql);
        $usersArray = $statement->fetchAll(PDO::FETCH_ASSOC);

       /* $stmt = $this->connect()->prepare('SELECT * from users');
        $stmt->execute();
        $usersArray = $stmt->fetchAll(PDO::FETCH_CLASS, User::class);*/
        return $usersArray;
    }
}