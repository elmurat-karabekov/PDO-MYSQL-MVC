<?php
// Control of the MVC mode
//      - inserts to or updates the database (does not contain actual queries!)

class UsersContr extends Users
{
    public function createUser($name, $lname, $dob){
        $this->setUser($name, $lname, $dob);
    }
}