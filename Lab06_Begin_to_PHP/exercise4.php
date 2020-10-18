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

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 my-5 mx-2 mx-sm-auto border rounded px-3 py-3">
                <h5 class="text-center mb-3">User Information</h5>
                <form method="post" action = "verify.php">
                    
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input name = "name" type="text" id="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Your email</label>
                        <div>
                            <input name = "email" type="text" id="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Gender</legend>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input checked name = "gender" type="radio" class="custom-control-input" id="male" value = "Male">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input name = "gender" type="radio" class="custom-control-input" id="female" value = "Female">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Favorite web browsers</legend>
                        <div class="custom-control custom-checkbox">
                            <input name = "browser[]" type="checkbox" class="custom-control-input" id="chrome" value = 'Google Chrome'>
                            <label class="custom-control-label" for="chrome">Google Chrome</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "browser[]" type="checkbox" class="custom-control-input" id="ff" value = 'Firefox'>
                            <label class="custom-control-label" for="ff">Firefox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "browser[]" type="checkbox" class="custom-control-input" id="safari" value = 'Safari'>
                            <label class="custom-control-label" for="safari">Safari</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input name = "browser[]" type="checkbox" class="custom-control-input" id="edge" value = 'Edge'>
                            <label class="custom-control-label" for="edge">Edge</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="col-form-label">Prefered Operating System</legend>
                        <select name="os" class="custom-select">
                            <option selected value = "Windows 10">Windows 10</option>
                            <option value="macOS">macOS</option>
                            <option value="Linux">Linux</option>
                        </select>
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