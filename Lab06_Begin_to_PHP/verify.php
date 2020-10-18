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

    <title>Infor</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 my-5 mx-2 mx-sm-auto border rounded px-3 py-3">
                <h5 class="text-center mb-3 text-success">Confirm Information</h5>
                <form method="get">
                    
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <?php 
                            $name = $_POST["name"];

                            echo "<div class = \"text-success font-weight-bold\">$name</div>"; 
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Your email</label>
                        <?php 
                            $email = $_POST["email"];

                            echo "<div class = \"text-success font-weight-bold\">$email</div>"; 
                        ?>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Gender</legend>
                        <?php 
                            $gender = $_POST["gender"];

                            echo "<div class = \"text-success font-weight-bold\">$gender</div>"; 
                        ?>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Favorite web browsers</legend>
                        
                        <?php
                            echo "<ul>";

                            foreach($_POST['browser'] as $value)
                            {
                                echo "<li class = \"text-success font-weight-bold\">$value</li>"; 
                            }

                            echo "</ul>";
                        ?>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Prefered Operating System</legend>
                        <?php 
                            $os = $_POST["os"];

                            echo "<div class = \"text-success font-weight-bold\">$os</div>"; 
                        ?>
                    </div>
                    <button name = "submit" type = "submit" class="btn btn-primary px-5 mr-2 btn-success">
                        Send
                    </button>
                    <button type = "reset" class="btn btn-outline-primary px-5">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>