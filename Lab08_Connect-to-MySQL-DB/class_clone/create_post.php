<?php   
    $post_content = $_POST["post_content"];
    $class_id = $_GET["class_id"];

    require "connect.php";

    $message = "";

    $sql = "INSERT INTO `posts` (`post_id`, `post_content`, `class_id`) VALUES (NULL, '$post_content', $class_id);";
            
    if($connection->query($sql) === true){
        header("Location: post.php?id=$class_id");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
?>
