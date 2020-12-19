<?php
    require('connect.php');

    //assgin variables by using POST method
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Message to inform what error should be
    $message = "";

    // check if user is here or not so we can add new user with no overlapping situation
    $user_check_query = "SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email' LIMIT 1";
    $result = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            $message = "Username already exists" ;
            echo $message;
        }

        else if ($user['email'] === $email) {
            $message = "Email already exists";
            echo $message;
        }
    }

    else{
        $sql = "INSERT INTO `users` (`user_id`, `email`, `username`) 
        VALUES (NULL, '$email', '$username');";
                
        if($connection->query($sql) === true){
            //Send mail to verify the account
            $to       = $email;
            $subject  = "Mail verification for $username";
            $message  = "
            <html>
            <body>
                <div>
                    <p>Please click the link below to reset your password</p>
                </div>
                <div>
                    <a href = \"http://localhost:88/Email_verification_test/verify.php?username=$username\">Click here to verify that you are $username</a>
                </div>
            </body>
            </html>
            ";
            $headers  = 'From: nhutnguyenf330@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';

            if(mail($to, $subject, $message, $headers))
                echo "User added, please check " . $email . " for verification";
            else
                echo "Fail to send email to $email :(";
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }

    


?>