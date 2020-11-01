<?php
    //this helps connect to db and write input to table in connected db
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password)){
        $host = "localhost";
        $dbuser = "root";
        $dbpassword = "123";
        $dbname = "simple-connection";

        //connect to db
        $connection = new mysqli($host, $dbuser, $dbpassword, $dbname);

        if($connection->connect_error){
            die('Connection lost: ' . $connection->connect_error);
        }
        else{
            $sql = "insert into user(firstname,lastname,username,pass) 
			values('$firstname','$lastname','$username','$password')";
			
			if($connection->query($sql) === true){
				echo "User added";
			}
			else{
				echo "Error: " . $sql . "<br>" . $connection->error;
				$connection->close();
			}
        }
    }
    else{
        echo "Something is not right";
        die();
    }
?>