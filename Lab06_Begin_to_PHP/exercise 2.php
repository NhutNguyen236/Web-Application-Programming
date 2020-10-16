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

    <title>PHP-simple-calculator</title>
</head>

<body>
    <?php

        $error = NULL;
        $success = NULL;

        if(isset($_POST['nu1']) && isset($_POST['nu2'])){
            
            $number1 = $_POST['nu1'];
            $number2 = $_POST['nu2'];
            $op = $_POST['op'];
            
            //Check if number 1 is empty or not
            if(empty($number1)){
                $error = "Please enter number 1";
            }
            
            //Check if number 2 is empty or not
            else if(empty($number2)){
                $error = "Please enter number 2";
            }

            //Check if there is any operator selected or not
            else if(empty($op)){
                $error = "Please select one operator";
            }

            else{
                $result = 0;
                if($op == '+'){
                    $result = $number1 + $number2;
                }

                if($op == '-'){
                    $result = $number1 - $number2;
                }
                
                if($op == '*'){
                    $result = $number1 * $number2;
                }

                if($op == '/'){
                    $result = $number1 / $number2;
                }

                $success = "$number1 $op $number2 =  $result";
            }
        }
    ?>
    <div class="container">

        <div class="row">
            <div class="col-md-6 my-4 mx-auto border rounded px-3 py-3">
                <h4 class="text-center">Basic Operations</h4>
                <form method = "post">
                    <div class="form-group">
                        <label for="num1">1st Operand</label>
                        <input name = "nu1" type="text" class="form-control" id="num1">
                    </div>
                    <div class="form-group">
                        <label for="num2">2nd Operand</label>
                        <input name = "nu2" type="text" class="form-control" id="num2">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name = "op" value = "+" id="add" type="radio" class="custom-control-input">
                            <label for="add" type="radio" class="custom-control-label">Cộng</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name = "op" value = "-" id="subtract" type="radio" class="custom-control-input">
                            <label for="subtract" type="radio" class="custom-control-label">Trừ</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name = "op" value = "*" id="multiply" type="radio" class="custom-control-input">
                            <label for="multiply" type="radio" class="custom-control-label">Nhân</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name = "op" value = "/" id="divide" type="radio" class="custom-control-input">
                            <label for="divide" type="radio" class="custom-control-label">Chia</label>
                        </div>
                    </div>
                    <?php
                        if(!is_null($error)){
                            echo "<div class=\"alert alert-danger text-center\">$error</div>";
                        }
                    ?>
                    <button type = "submit" class="btn btn-success">Result</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 mx-auto mt-1 text-center px-3 py-3">
            <?php
                if(!is_null($success)){
                    echo "<div class=\"alert alert-success text-center mt-1\">$success</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>