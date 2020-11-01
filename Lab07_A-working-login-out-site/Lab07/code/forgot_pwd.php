<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot password sample</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    $email = $_POST['email'];
    $error = null;

    if(isset($email)){

        if(empty($email)){
            $error = "Please enter email";
        }

        else if (strpos($email, '@') == false) { 
            $error = "Invalid email";
        }

    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <h3 class="text-center mt-5 mb-3 text-white bg-dark">Forgot your password?</h3>
            <form class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light" method = "post" action = "login.php">
                <div class="form-group">
                    <p><i class="fa fa-envelope" style="font-size:24px;"></i> Fill in your email here so we can send you a link to reset your password</p>
                </div>

                <div class="form-group">
                    <label for="password">Enter email here:</label>
                    <input name = "email" id="email" type="text" class="form-control" placeholder="Email" value = "<?php echo $email;?>">
                </div>

                <div class="form-group">

                    <?php
                        if(!empty($error)){
                            echo "<div class = \"alert alert-danger\">$error</div>";        
                        }
                        else if(!empty($error) && $status != 0){
                            echo "<div class = \"alert alert-success\">$error</div>";        
                        }
                    ?>
                    <button type = "submit" class="btn btn-success px-5 btn-block">Reset password</button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
