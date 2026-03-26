<?php
session_start();


$host="localhost";
$user="root";
$pass="";
$dbname="movie";


try {
    
    $conn =new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    echo"Connection was succsesful";

} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
 ?>