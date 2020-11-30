# Simple E-mail sending :emoji:

* [`mail` from PHP documentation](https://www.php.net/manual/en/function.mail.php)

* In this one, I just send mail using SMTP protocol and it basically is `localhost` so we have to cofigure our localhost to get it done right. And it's a Yes when XAMPP and AMPPS configurations are literally same same, not so different so here could be [the link for Gmail sending using localhost](https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/)

* Detail for AMPPS Gmail configure
    - Look for this path: `/Ampps/php/php.ini`
    - Then, search for `[mail function]` and you can expect to see those
    ```
        [mail function]
        ; For Win32 only.
        ; http://php.net/smtp
        SMTP = localhost
        ; http://php.net/smtp-port
        smtp_port = 25
    ```
    - Replace them with this but before it please comment the old one so you can comeback and change it back later
    ```
        [mail function]
        /*
        ; For Win32 only.
        ; http://php.net/smtp
        SMTP = localhost
        ; http://php.net/smtp-port
        smtp_port = 25
        */
        SMTP = smtp.gmail.com
        smtp_port = 587
    ```
* Example: Sending a simple mail

```php
<?php
    $to_email = "receipient@gmail.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi,nn This is test email send by PHP Script";
    $headers = "From: sender\'s email";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
?>
```