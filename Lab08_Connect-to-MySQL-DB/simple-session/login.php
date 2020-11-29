<?php
    session_start();
    $message="";
    
    $user = $_POST['user_name'];
    $pass = $_POST['password'];

    if(count($_POST)>0) {

        if(strcmp($user,"admin") == 0 && strcmp($pass,"123") == 0) {
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        } else {
        $message = "Invalid Username or Password!";
        }
        }
        if(isset($_SESSION["user"])) {
        header("Location:index.php");
    }
?>

<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <h3 align="center">Enter Login Details</h3>
    Username:<br>
    <input type="text" name="user_name" required>
    <br>
    Password:<br>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset">
    </form>

</body>
</html>