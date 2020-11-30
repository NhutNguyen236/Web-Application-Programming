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