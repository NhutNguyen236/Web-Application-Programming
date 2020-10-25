# Lab 08 - Making it possible with DB using phpMyAdmin

<p align = "center">
  <img src = "https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" width = "200" height = "150"/>
</p>

## What is phpMyAdmin? 😉

* phpMyAdmin is an open-source software tool introduced on September 9, 1998, which is written in PHP. Basically, it is a third-party tool to manage the tables and data inside the database

## How to use phpMyAdmin? 
* Usually to open phpMyAdmin, you need to enter this adress *localhost/phpmyadmin* or "localhost: <your port>/phpmyadmin"
* To connect to your phpmyAdmin, use command mysqli("localhost", username, password, dbname)
  
## Lessons description
* We have 2 folders named respectively *A-simple-connection* and *Lab08*. For *A-simple-connection*, I made a very simple sign-up form and connected it to phpmyAdmin to store the data so the main function of this folder is to show the way we write the input to DB and just it. For *Lab08*, it is the main lab so let see. 

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
* With AMPPS, go to root folder open folder ```phpmyadmin```
* Search for this one 

<img src = "https://lh3.googleusercontent.com/cKp-sc5rEVRmhRZN1gtSqfbKPtOzOrbIPHValStfBLmZIqKdn1GEoWCOh7BhCTNKo_vL6WwyPxGgk7F6MrhX=w1919-h937"/>

* Then enter your password 
