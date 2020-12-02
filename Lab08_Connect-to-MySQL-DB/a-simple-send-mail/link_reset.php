<?php
    $to       = 'nhutnguyenf330@gmail.com';
    $subject  = 'Testing sendmail.exe';
    $message  = "
    <html>
    <body>
        <div>
            <p>Please click the link below to reset your password</p>
        </div>
        <div>
            <a href = \"http://localhost:88/a-simple-send-mail/reset_index.php\">Click here to reset your password</a>
        </div>
    </body>
    </html>
    ";
    $headers  = 'From: nhutnguyenf330@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    if(mail($to, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
?>