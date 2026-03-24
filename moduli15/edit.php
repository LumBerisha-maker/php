<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE users SET username=:username, password=:password WHERE id=:id";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id', $id);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':password', $password);

    $prep->execute();

    header("Location:dashboard.php");

}
?>