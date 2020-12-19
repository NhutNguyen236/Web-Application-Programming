<?php
    session_start();
    // Check session list
    if($_SESSION['username']){
        $username = $_GET['username'];
        echo "<h1>Hello $username, now you cannot go back to the signup no more haha</h1>";
        echo "<a class=\"dropdown-item\" href=\"logout.php\">Log out</a>";
    }
    
    else{
        echo "You are trying to access home.php without register";
        require("sign_up.php");
    }

    
?>
