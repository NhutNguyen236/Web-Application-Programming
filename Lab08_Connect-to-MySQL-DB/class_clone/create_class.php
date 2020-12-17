<?php
    $class_name = $_POST["class_name"];

    require "connect.php";

    $message = "";

    // check if class name is here or not so we can add new user with no overlapping situation
    $class_check_query = "SELECT * FROM `classes` WHERE `class_name`='$class_name' LIMIT 1";
    $result = mysqli_query($connection, $class_check_query);
    $class = mysqli_fetch_assoc($result);
    
    if (isset($class_name) && $class) { // if user exists
        if ($class['class_name'] === $class_name) {
            $message = "Class already exists" ;
            echo $message;
        }
    }

    else{
        $sql = "INSERT INTO `classes` (`class_id`, `class_name`) 
        VALUES (NULL, '$class_name');";
                
        if($connection->query($sql) === true){
            require("class.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
?>