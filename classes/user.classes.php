<?php
require_once "User.model.php";
require_once "database.php"; 

class UserStorage extends Database {

    function __construct()
    {
        echo "hi";
        if (isset($_GET['ID']) && isset($_GET['Firstname'])) {
            $this->updateUser($_GET['Firstname'], $_GET['Lastname'], $_GET['Email'], $_GET['ID']);
        }   
    }

    public function getAllUsers() {
        $sql ='SELECT * FROM users';
        $statement = $this->connect()->query($sql);
        $usersArray = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $usersArray;
    }

    public function deleteUser($id) {       
        $sql = "DELETE FROM users WHERE id=$id";
        $this->connect()->exec($sql);
    }

    public function updateUser($firstname, $lastname, $email, $id) {
        $sql = "UPDATE users SET firstname=?, lastname=?, email=? WHERE id=?";
        $statement = $this->connect()->prepare($sql);
        $statement ->execute([$firstname, $lastname, $email, $id]);
    }
}