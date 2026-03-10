<?php


include_once('config.php');


$id = $_GET['id'];


$sql = "SELECT * FROM users WHERE id=:id";


$prep = $conn->prepare($sql);


$prep->bindParam(':id', $id);


$prep -> execute();


$data = $prep->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   form>input{

     margin: 10px;
       font-size: 20px;
       padding:5px;
   }

     button{
          border: 1px solid black;
          padding: 10px 30px;
          font-size: 20px;
     }
        </style>
</head>
<body>
    

     </table>

 <form action="edit.php" method="POST">


        <input type="text" name="id" value="<?php echo $data[$id] ?>"><br>
        <input type="text" name="username" value="<?php echo $data[$username] ?>"><br>
        <input type="text" name="password" value="<?php echo $data[$password] ?>"><br>


      <button type="submit" name="update">UPDATE</button>           


        </form>
</body>
</html>