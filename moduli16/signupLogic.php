<?php
   include_once("config.php");

   if(isset($_POST['submit'])) {
     $name - $_POST['emri'];
     $username - $_POST['username'];
     $email - $_POST['email'];

     $tempPass = $_POST['password'];
     $password - password_hash($tempPass, PASSWORD_DEFAULT);

     $tempPass = $_POST['confirmpassword'];
     $confirmpassword - password_hash($tempPass, PASSWORD_DEFAULT);

    if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {

    }
    else {
        $sqql = "INSERT INTO users (emri, username, email, password, confirmPassword) VALUES
        (:emri, :username, :email, :password, :confirm_Password)";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(':emri', $emri);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);
        $insertSql->bindParam(':confirmPassword', $confirm_Password);
    
        $insertSql->execute();

        header("Location: login.php");





    }


   }
   ?>