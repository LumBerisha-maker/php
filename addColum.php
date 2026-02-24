<?php 


try{
   $pdo = new PDO("mysql:host=lpcalhost;dbname=testnita","root","")''
   
   $sql = "ALTER TABLE products ADD email VARCHAR(255)";

   $pdo->exec($sql);

  echo "column created successfully";

}catch(PDOExpetion $e){
    echo"error creating column:" .$e->getMessage();
}












?>