# A simple connection means *"Just connectable and writabe"*

### Before going to program a working sign-up site, we need to set up our phpmyAdmin database

* To prevent instant error which can be `Connection lost: Access denied for user 'root'@'localhost' (using password: YES)`, you need to set password for your root table 


* This folder is mostly about that, I have just connect to my created local phpmyAdmin and add a user by a simple 

```
$sql = "insert into user(firstname,lastname,username,pass) values('$firstname','$lastname','$username','$password')";
```

* I have done a sign-up practice in this folder so log-in will be the next, stay tune...

