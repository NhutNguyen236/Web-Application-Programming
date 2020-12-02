<?php
    require('connect.php');

    // Update old password with new one
    $new_password = $_POST['exampleInputPassword1'];

    $sql = "UPDATE `password` SET `password` = '$new_password' where `pass_id` = 1";
    if(!empty($new_password)){
        if($connection->query($sql) === true){
            echo "Your password has changed";
        }
        else{
            echo "Update failed";
            die();
        }
    }
?>