<?php 
  session_start();

  include_once('config.php');

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

   if(empty($username) || empty($password)){
    echo "Please fill in all fields";
   }
   else {
    $sql = "select id, emri, username, password, is_admin from users where username = :username";

    $selectUser = $conn->prepare($sql);

    $selectUser->bindParam(":username", $username);

    $selectUser->execute();

    $data = $selectUser->fetch();

    if($data == false){
        echo "The user does not exist";
    }
    else{
        if(password_verify($password, $data['password'])){
            $_session['id'] = $data['id'];
            $_session['username'] = $data['username'];
            $_session['email'] = $data['email'];
            $_session['emri'] = $data['emri'];
            $_session['is_admin'] = $data['is_admin'];

              header('Location: dashboard.php');
        }
       else {
        echo "The password is not valid";
       }
    }
   
   }



  }
?>