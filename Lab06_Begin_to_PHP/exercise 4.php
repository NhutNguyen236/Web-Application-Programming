<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP Exercises</title>
</head>

<style>
    .error{
        color: #FF0000;
    }
</style>

<body>
    <?php

        $name_error = null;
        $email_error = null;
        $browser_error = null;

        if(isset($_POST['name']) && isset($_POST['email'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            
            echo $_POST['browser'];

            if(empty($name) && empty($email)){
                $name_error = "Please enter your name";
                $email_error = "Please enter your email";
            }

            else if(empty($name)){
                $name_error = "Your name is still empty";
            }
    
            else if(empty($email)){
                $email_error = "Your email is still empty";
            }   

            else if(!(isset($_POST['b1']) || isset($_POST['b2']) || isset($_POST['b3']) || isset($_POST['b4']))){
                $browser_error = "Please choose a browser";
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 my-5 mx-2 mx-sm-auto border rounded px-3 py-3">
                <h5 class="text-center mb-3">User Information</h5>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input name = "name" type="text" id="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'];?>">
                        <span class="error">
                            <?php 
                                echo $name_error;
                            ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="email">Your email</label>
                        <div>
                            <input name = "email" type="text" id="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email'];?>">
                            <span class="error">
                                <?php 
                                    echo $email_error;
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Gender</legend>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input name = "gender" type="radio" class="custom-control-input" id="male">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input name = "gender" type="radio" class="custom-control-input" id="female">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Favorite web browsers</legend>
                        <div class="custom-control custom-checkbox">
                            <input name = "b1" type="checkbox" class="custom-control-input" id="chrome">
                            <label class="custom-control-label" for="chrome">Google Chrome</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "b2" type="checkbox" class="custom-control-input" id="ff">
                            <label class="custom-control-label" for="ff">Firefox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "b3" type="checkbox" class="custom-control-input" id="safari">
                            <label class="custom-control-label" for="safari">Safari</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "b4" type="checkbox" class="custom-control-input" id="edge">
                            <label class="custom-control-label" for="edge">Edge</label>
                        </div>

                        <span class="error">
                            <?php 
                                echo $browser_error;
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Prefered Operating System</legend>
                        <select name="cars" class="custom-select">
                            <option selected>Windows 10</option>
                            <option value="volvo">macOS</option>
                            <option value="fiat">Linux</option>
                        </select>
                    </div>
                    <button type = "submit" class="btn btn-primary px-5 mr-2 btn-success">Send</button>
                    <button type = "reset" class="btn btn-outline-primary px-5">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>