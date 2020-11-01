<?php
    //assgin variables by using POST method
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //assign db variables
    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "123";
    $dbname = "simple-connection";

    //connect to db
    $connection = new mysqli($host, $dbuser, $dbpassword, $dbname);

    //check if the connection to the DB is not OK so end the process
    if($connection->connect_error){
        die('Connection lost: ' . $connection->connect_error);
    } 
?>