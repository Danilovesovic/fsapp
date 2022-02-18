<?php
require "config/init.php";


if($_SERVER['REQUEST_METHOD'] === "POST"){
    $errors = [];
   if(isset($_POST['email']) && !empty($_POST['email'])){
       $email = $_POST['email'];
   }else{
       $email_error = "Email is required";
       $errors[] = $email_error;
   }
   if(isset($_POST['password']) && !empty($_POST['password'])){
       $password = $_POST['password'];
   }else{
       $password_error = "Password is required";
       $errors[] = $password_error;
   }

   if(count($errors) === 0){
          $sql = "SELECT * FROM users WHERE email = '$email'  AND password = '$password'";
          $query = mysqli_query($db,$sql);

          if(mysqli_num_rows($query) === 1){
              $user = mysqli_fetch_assoc($query);
              dd($user);
          }else{
              header("Location: index.php");
          }
   }
}

require "view/index.view.php";