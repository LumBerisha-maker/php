<?php
session_start();


$host="localhost";
$user="root";
$pass="";
$dbname="test umi";


try {
    
    $conn =new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);


} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
 ?>