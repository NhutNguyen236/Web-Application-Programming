# Lab 08 - Making it possible with DB using phpMyAdmin

<p align = "center">
  <img src = "https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" width = "200" height = "150"/>
</p>

## What is phpMyAdmin? 😉

* phpMyAdmin is an open-source software tool introduced on September 9, 1998, which is written in PHP. Basically, it is a third-party tool to manage the tables and data inside the database

## How to use phpMyAdmin? 
* Usually to open phpMyAdmin, you need to enter this adress *localhost/phpmyadmin* or "localhost: <your port>/phpmyadmin"
* To connect to your phpmyAdmin, use command mysqli("localhost", username, password, dbname)

## Link for use

* I will follow [this link](https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database) to write a true working login and signup site which is not really difficult to follow by. 
* [Password Reset Email](https://www.phpcodingstuff.com/blog/send-reset-password-link-email-php.html)

## Folders description
* We have 2 folders named respectively *A-simple-connection* and *Lab08*. For *A-simple-connection*, I made a very simple sign-up form and connected it to phpmyAdmin to store the data so the main function of this folder is to show the way we communicate with the database - Read and Write. For *Lab08*, it is the main lab so let see. 
* `date-insertion-problem` is about date `phpmyadmin` insertion which I had a problem of writing `date` type in database so I do it step step in this folder 😉

## Some problems you may have
*Note that the ways to fix them are the same for any kind of localhost in the market and I know that you will not read this but Google the solution instead but I do... :sweat_smile:*

### *Access denied for user 'root'@'localhost' (using password: NO)* :sleepy:
* With AMPPS Go to file ```my.ini``` it is right in folder *mysql* but with XAMPP it is in ```mysql/bin/my.ini```
* Look for section ```[mysqld]``` and add *skip-grant-tables*
* Restart your MySQL in AMPPS control panel by turn it off and turn it on again 
* Go back to your phpmyAdmin and go to table you want to grant access to then go to *Priviledge* then choose *change password* -> choose *No password*
But this solution doesn't work sometimes so I highly recommend all of you to set up a password for each dbusername so your phpmyAdmin will be more secured

### *Error: MySQL said: Cannot connect Invalid settings* :sleepy:
This error is usually raised when you change your root localhost phpmyadmin password 
* With AMPPS, go to root folder open folder ```phpmyadmin``` then you should have found this file `config.inc.php`, if so, open it up
* Search for this one 
`$cfg['Servers'][$i]['password']`
* Then enter your password in the format of `$cfg['Servers'][$i]['password'] = '<your-password>'`

### *Database not selected or things like that when importing a db*
* To fix it, simply just create a new database with a custom name first then import it and *NEVER* import and override it on an existing db
