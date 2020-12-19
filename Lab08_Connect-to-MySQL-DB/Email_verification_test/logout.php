<?php
    session_start();
    unset($_SESSION["username"]);
    header("Location: sign_up.php");
?>