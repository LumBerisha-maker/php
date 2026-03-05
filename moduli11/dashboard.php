<?php 


include_once('config.php');

$sql = "SELECT * FROM users";

$getUsers = $conn->prepare($sql);

$getUsers -> execute();

$users = $getUsers->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table, td, th{
              border: 1px solid black;
    
         }

         td, th{
            padding: 15px;
         }

         th{
         background-color: green;
         }

        th{
          background-color: green;
        }

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
    
<table>
     <tr>
          <th> ID</th>
          <th> Username </th>
          <th> Password </th>


 <?php
     foreach($users as $user) { ?>
     <tr>
     <td><?php echo $user ['id']?></td>
     <td><?php echo $user ['username']?></td>
    <td><?php echo $user ['password']?></td>
   <td> <?= "<a href='delete.php?id=$user[id]'>Delete</a>" ?></td>
</tr> 
     <?php } ?>
     
     </table>

       <form>
     <input type="hidden" name="id" value="<?php echo users[$id] ?>"><br>
     <input type="hidden" name="username" value="<?php echo users[$username] ?>"><br>
     <input type="hidden" name="password" value="<?php echo users[$password] ?>"><br>
     
    <button type="submit">Update</button>


</form>





</body>
</html>