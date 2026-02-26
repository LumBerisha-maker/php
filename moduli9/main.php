<?php 

$username = $_GET['username'];
$password = $_GET['password'];
echo $username;
echo "br";
echo $password;


?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moduli9</title>
</head>
<body>
    <label for="" placeholder="Username">Username</label><br>
    <input type="text" name="Username" id="username"><br>
     <label for="password"> Password:</label>
    <input type="password" name="Password" id="upassword"><br>
    <input type="Submit" value="submit">
</body>
</html>