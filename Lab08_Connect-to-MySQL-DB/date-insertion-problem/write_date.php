<?php
    //require to connect tp db
    require('connect.php');

    //assgin variables by using POST method
    $birthday = $_POST['birthday'];


    if(!empty($birthday)){
        $sql = "INSERT INTO `date` (`date_id`, `date`) VALUES (NULL, '$birthday');";
			
        if($connection->query($sql) === true){
            echo "Date added Hooray";
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
    
    else{
        echo "Something is not right or you have not fill all of the fields";
        die();
    }
?>