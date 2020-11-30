<?php 
    $to_email = "phamp9331@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is test email send by PHP Script";
    $headers = "From: sender\'s email";

    if (maileader($to_email, $subject, $body, $hs)) {
        echo "Email successfully sent";
    } 
    
    else {
        echo "Email sending failed...";
    }
?>