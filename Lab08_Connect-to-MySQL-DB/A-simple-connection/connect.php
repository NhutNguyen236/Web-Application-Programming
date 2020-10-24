<?php
    //this helps connect to db and write input to table in connected db
    $firstname = $_POST['username'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password)){
        $host = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbname = "simple-connection";

        //connect to db
        $connection = new mysqli($host, $dbuser, $dbpassword, $dbname);

        if($connection->connect_error){
            die('Connection lost: ' . $connection->connect_error);
        }
        else{
            echo "Connected :)";
        }
    }
    else{
        echo "Something is not right";
        die();
    }
?>