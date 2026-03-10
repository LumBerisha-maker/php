<?php

include_once('config.php');




if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET username=:username, password=:password where id=:id"

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id', $id);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':password', $password);

      $prep->execute();

      header("Location:dashboard.php");
}

?>  