<?php 


$host = 'localhost';
$user = 'root';
$password = '';


try{


$conn = new PDO("mysql:host=$host" , $user, $password);

echo "connected";



}catch(Exeption $e){
    echo "not connected";
}





?>