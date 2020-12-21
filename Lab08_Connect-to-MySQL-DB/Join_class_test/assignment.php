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
    <title>Trang bai tap</title>
</head>
  <body>
  <!--Thanh navbar-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
           <a class="navbar-brand" href="class.php?userid=<?php echo $_GET['userid']?>">
              <img src="./image/TDT_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Tôn Đức Thắng University
           </a>
              <div class="topnav">
                <a href="post.php?id=<?php echo $_GET['class_id'];?>&&userid=<?php echo $_GET['userid'];?>">Trang lớp học</a>
                <a href="classlist.php?id=<?php echo $_GET['class_id'];?>&&userid=<?php echo $_GET['userid'];?>">Danh sách lớp</a>
              </div>
            <ul></ul>
    </nav>
    
</body>
</html>
