<?php
    //Connect to Db
    require('../connect.php');
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
    
    <title>Add to database</title>
  </head>
  <body>
    
    <!-- Admin options nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a id="logo" class="navbar-brand" href="#">Admin Panel</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="del_db.php">Delete user</a>
                <a class="nav-item nav-link active" href="update_db.php">Update user</a>
            </div>
        </div>
    </nav>

    <!--Form for admin to insert into sql table-->
    <div id = "add_user_form">
        <form method="post" action = "add_function.php">
            <div class="container">
                <h2>Be wise when you invite someone in</h2> 
                <div>
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" required>
                </div>                
                
                <div>
                    <label for="uname1"><b>Email</b></label>
                    <input type="text" name="uname1" required>
                </div>
                
                <div>
                    <label for="psw1"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Hãy nhập mật khẩu" name="psw1" required>
                </div>
                
                <div>
                    <label for="name"><b>Họ và tên</b></label>
                    <input value= "<?php echo $fullname ?>" type="text" placeholder="Nhập họ và tên" id="fullname" name="fullname" required>
                </div>    
                
                <div>
                    <label for="birthdate"><b>Ngày sinh</b></label><br>
                    <input type="date" name = "birthday">
                </div>
                
                <div>
                    <label for="PhoneNumber"><b>Số điện thoại</b></label>
                    <input type="text" placeholder="Nhập số điện thoại" name="PhoneNumber" required>
                </div>
                
                <div>
                    <label for="role"><b>Vai trò của bạn là</b></label>
                </div>                    

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "1"> Học sinh
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "2"> Giáo viên
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" name="role" value = "3"> Ủy quyền Admin
                </div>
                
                <!--Khi nhấn nút cancel thì đóng form đăng ký lại-->
            <div class="clearfix">
                
                <button type="submit" class= "btnOnClick btn btn-primary btn-lg btn-block">Add</button>
                
            </div>
                
    
            </div>
        </form>
    </div>
    
  </body>
</html>