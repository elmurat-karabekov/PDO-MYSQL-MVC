<?php
// class User -> Model of the MVC model
//               - only interacts with the database
//               - each method -> specific SQL query

class Users extends Dbh
{
    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function setUser($name, $lname, $dob){
        $sql = $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $lname, $dob]);
    }
}