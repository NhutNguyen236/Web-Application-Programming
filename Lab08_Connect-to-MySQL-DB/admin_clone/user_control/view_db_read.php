<?php
    //Connect to Db
    require('../connect.php');

    $sql = 'SELECT * FROM `users`';
    $result = $connection->query($sql) or die(mysqli_error($connection));
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="../admin_style.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title>View Users</title>
  </head>
  <body>
    
    <!-- Admin options -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a id="logo" class="navbar-brand" href="#">Admin Panel</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="add_db.php">Add user <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="update_db.php">Update user</a>
                <a id = "class_control_nav" class="nav-item nav-link active" href="../class_control/view_class.php">Class Control</a>
            </div>
        </div>
    </nav>

    <!--SQL Table read-->
    <section>
        <table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Birthdate</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
            </tr>

            <?php
                while($row = $result->fetch_assoc()){
            ?>        
            <tr>
                <td><?php echo $row['user_id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['fullname'];?></td>
                <td><?php echo $row['birthdate'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td>
                    <?php 
                        if($row['role'] == 1){
                            echo 'Student';
                        }
                        else if($row['role'] == 2){
                            echo 'Teacher';
                        }
                        else{
                            echo 'Admin';
                        }
                    ?>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </section>
    
  </body>
</html>