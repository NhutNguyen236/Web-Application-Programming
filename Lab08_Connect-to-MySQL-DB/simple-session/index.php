<?php
    session_start();
?>
<html>
    <head>

    <title>User Login</title>
    
    </head>
    
    <body>

        <?php
        if($_SESSION["user"]) {
        ?>
        
        Welcome <?php echo $_SESSION["user"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.

        <?php
        }else echo "<h1 align = \"center\">Please login first .</h1>";
        ?>
    </body>

</html>