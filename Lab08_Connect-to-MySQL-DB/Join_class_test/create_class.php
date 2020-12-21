<?php
    $class_name = $_POST["class_name"];

    // Assign userid
    $user_id = $_GET['userid'];

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
        // Input created class in classes table
        $sql = "INSERT INTO `classes` (`class_id`, `class_name`) VALUES (NULL, '$class_name');";
                
        if($connection->query($sql) === true){
            // get created class_id with class_name was given
            $get_classid = "SELECT `class_id` FROM `classes` WHERE `class_name` = '$class_name'";
            $result = mysqli_query($connection, $get_classid) or die(mysqli_error($connection));
            $row = mysqli_fetch_array($result);
            $created_classid = $row[0];

            // connect class and user in class_list table 
            $sql1 = "INSERT into `class_list`(`class_id`,`user_id`) VALUES($created_classid, $user_id)";
            if($connection->query($sql1) === true){
                require("class.php");
            }
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
?>