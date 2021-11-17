<?php
require_once "User.model.php";
require_once "database.php";

class UserStorage extends Database {

    public function getAllUsers() {
        $sql ='SELECT * FROM users';
        $statement = $this->connect()->query($sql);
        $usersArray = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $usersArray;
    }

    public function deleteUser($id) {
        
        $sql = "DELETE FROM users WHERE id=$id";
        $this->connect()->exec($sql);
        echo "Record deleted successfully";

    }
}