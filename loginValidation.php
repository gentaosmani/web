<?php
  if(isset($_POST['submit']))
  {
   validateData($_POST['email'],$_POST['password']);
  } else {
    $message = "login unsuccessful";
echo "<script type='text/javascript'>alert('$message');</script>";
  }

  function validateData($email, $password){

  if(empty($email)){
     $message = "email is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
 } else if(empty($password)) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
    $message = "login successful";
echo "<script type='text/javascript'>alert('$message');</script>";
  }
}
  ?> 