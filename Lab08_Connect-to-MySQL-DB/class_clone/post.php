<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style_request2.css">
    <script src="./js/Collapse_sidebar.js"></script> 
    <link rel="stylesheet" href="./css/TrangThamGiaLopHoc.css">
    <link rel="stylesheet" href="./css/Trangmonhoc.css">
    <title>Document</title>
</head>
  <body>
    <!--Form comment-->
    <div class="container">
        <div class = "row"> 
                    <div class="card mb-3">
                        <img class="card-img" src="./image/a3.jpg" alt="">
                        <div class="card-img-overlay">
                            <h2 class="card-title text-light"></h2>
                            <p class="card-text text-light">
                            
                            </p>
                            <?php
                                // TRang người dùng chưa pas ID vi nó ko hiểu cái $_GET['id']; lấy từ đâu?
                                $class_id = $_GET['id'];
                                require('connect.php');

                                $sql = "SELECT class_name from classes where `class_id` = '$class_id'";
    
                                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                $row = mysqli_fetch_array($result);

                                echo "<p class=\"card-text text-light\">$row[0]</p>";
                            ?>
                        </div>
                    </div>
        </div>
        <form class="" action="create_post.php?class_id=<?php echo $_GET["id"];?>" method="POST" enctype="multipart/form-data">
                <?php
                $id="";
                $post_content="";

                if (isset($_GET["id"])){
                    $id = $_GET["id"];
                    require "connect.php";
                    $sql = "SELECT * FROM `posts` WHERE `post_id` = '$id';";
                    $result = $connection->query($sql) or die($connection->error);

                    //$row= $result->fetch_assoc();
                    $row= $result->fetch_assoc();
                    $post_content = $row["post_content"];
                }
                ?>      
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="form-group shadow-textarea">
                            <label for="exampleFormControlTextarea6"></label>
                            <input type="text" name="post_content" id="post_content" required>
                            <button type="submit" class="btn_Post"> Đăng bài</button>
                        </div>
                    </div> 

        </form>    
                    <?php
                    require "connect.php";
                    $sql = "SELECT * FROM `posts` WHERE `class_id` = $id;";
                    $result = $connection->query($sql);
                    /*while ($row = $result->fetch_assoc())
                    {*/
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>     

                    <div class="form">
                            <div class="item_form1">
                                <p>
                                Thành Dương
                                </p>
                                <p>
                                <?php echo $row["post_content"] ?>
                                <a class="btn_deletePosts" href="delete_post.php?post_id=<?php echo $row["post_id"];?> && class_id=<?php echo $_GET['id'];?>" class="delete">Delete</a>
                                </p>
                            
                            </div>
                    </div>    
                    <?php
                    }
                    ?>     
    </div>
</body>
</html>
