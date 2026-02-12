<?php 


$host = 'localhost';
$db = 'restaurant';
$user = 'root';
$password = '';


try{


$conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

$sql = "CREATE TABLE users(
       id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(30) NOT NULL,
       password VARCHAR(30) NOT NULL
    

     )";



    $conn->exec($sql);






echo "TABLE CREATED";



}catch(Exeption $e){
    echo "TABLE NOT CREATED";
}





?>