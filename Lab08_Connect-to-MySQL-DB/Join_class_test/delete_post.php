<?php
    require ("connect.php");

    $id = $_GET["post_id"];
    $class_id = $_GET['class_id'];
    $sql = "DELETE FROM posts WHERE `post_id`=$id";

    if ($connection->query($sql) === TRUE) {
        header("Location: post.php?id=$class_id");
    }
?>