<?php
    // PDO - PHP Data Object is an interface for connecting to a database in PHP without writing code specific to database.
    //     - makes it easier to port our application to databases like MySQL, PostgreSQL

    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $userObj2 = new UsersContr();
        $userObj2->createUser('Josh', 'Peck', '1996-08-08');
    ?>
</body>
</html>