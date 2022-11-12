<?php 
// View of the MVC mode
//      - fetches the data from the database (does not contain actual queries!)

class UsersView extends Users
{
    public function showUser($name){
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['users_firstname'] . ' ' . $results[0]['users_lastname'];
    }
}