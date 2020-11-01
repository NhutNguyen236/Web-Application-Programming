<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login sample</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<video autoplay muted loop id="myVideo">
  <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
</video>

<style>
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }
</style>

<body>

<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = null;
    $status = 0;

    if(isset($username) && isset($password)){
        if(empty($username) && empty($password)){
            $error = "Please enter username and password";
        }

        else if(empty($username)){
            $error = "Please enter username";
        }

        else if(empty($password)){
            $error = "Please enter password";
        }

        /*
            - strcasecmp will return 1 if 2 strings are equal, 0 if opposite
            - in this condition, I will compare username and password with given data
        */
        else if(strcasecmp($username, 'NhutNguyen25') != 0 || strcasecmp($password, '123456') != 0){
            $error = "Your username or password is wrong";
        }

        /*
            - header: for detail https://www.w3schools.com/php/func_network_header.asp
            - in this case, header is used to switch to another page, with 'Location: <name.php>' it will head you to that page
            - exit() to totally exit the state of page
            - next stop, I will use cookies to store registry
        */
        else{
            header('Location: home.php');
            exit();
        }
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h3 class="text-center mt-5 mb-3 text-white bg-dark">User Login</h3>
            <form class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light" method = "post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name = "username" id="username" type="text" class="form-control" placeholder="Username" value = "<?php echo $username;?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name = "password" id="password" type="password" class="form-control" placeholder="Password" value = "<?php echo $password;?>">
                </div>
                <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember">
                    <label class="custom-control-label" for="remember">Remember login</label>
                </div>
                <div class="form-group">
                    <?php
                        if(!empty($error) && $status == 0){
                            echo "<div class = \"alert alert-danger\">$error</div>";        
                        }
                    ?>
                    <button type = "submit" class="btn btn-success px-5">Login</button>
                </div>
                <div class="form-group">
                    <p>Forgot password? <a href="forgot_pwd.php">Click here</a></p>
                </div>
            </form>

        </div>

        <div class="d-flex col-md-6 col-lg-5 mt-5">
            <form class = "mt-5 mb-3 border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light"> 
                <div>
                    <p class = "text-danger">Login infor</p>
                    <ul>
                        <li>Username: NhutNguyen25</li>
                        <li>Password: 123456</li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
