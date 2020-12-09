# Simple E-mail sending :email:

* [`mail` from PHP documentation](https://www.php.net/manual/en/function.mail.php)

* In this one, I just send mail using SMTP protocol and it basically is `localhost` so we have to cofigure our localhost to get it done right. And it's a Yes when XAMPP and AMPPS configurations are literally same same, not so different so here could be [the link for Gmail sending using localhost](https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/) or [this one](https://medium.com/@chalidade/simple-but-work-how-to-send-email-using-php-in-your-local-server-a56a6e2b7c9a) :smile:

* Detail for XAMPP Gmail configuration: 
    - If you are using AMPPS, it usually does not have `sendmail` so download it [here](http://www.glob.com.au/sendmail/sendmail.zip) - Skip this step if you are using XAMPP
    - Look for this path: `/XAMPP/sendmail/sendmail.ini`
    - Then, configure only details as below
    ```
        smtp_server=smtp.gmail.com
        smtp_port=465
        smtp_ssl=ssl
        default_domain=localhost
        error_logfile=error.log
        debug_logfile=debug.log
        auth_username=[your_gmail_account_username]@gmail.com
        auth_password=[your_gmail_account_password]
        hostname=localhost 
    ```
    - Then please `Save` it. 
    - Next, go to this one `/XAMPP/php/php.ini`
    - Open that file and then go for `mail function`, keep all, delete `;` on `sendmail_path` and configure it like this
    
    ```
    sendmail_path = "D:\XAMPP\sendmail\sendmail.exe -t -i"
    ```
    - Don't forget to save it

* [W3School lesson](https://www.w3schools.com/php/func_mail_mail.asp) and down there are 2 email sending skills with PHP you should know
* Example: Sending a simple mail

```php
<?php
    $to       = 'chalidaderahman@gmail.com';
    $subject  = 'Testing sendmail.exe';
    $message  = 'Hi, you just received an email using sendmail!';
    $headers  = 'From: adhe.ansa@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    if(mail($to, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
?>
```

* Sending a php form through email
```php
<?php
    $to = "somebody@example.com, somebodyelse@example.com";
    $subject = "HTML email";

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to,$subject,$message,$headers);
?>
```

## Specific situation: Password reset mail :page_facing_up:

- There are many ways to send a password reset mail using php but some most popular ways are: 
    - Sending a HTML form through email using PHP
    - Sending a link to a reset password page through email
- Up there I have just done a sample of sending a HTML form through email so I will make a reset password page using Bootstrap and send its link through email but first, you need a database to store password and I have already created one which named `password_reset.sql` , gotta go and import it to your `phpmyadmin`then you can expect this result below
<p align = "center">
    <img src = "/Screenshots/password_reset_table_before.png"/>
</p>



