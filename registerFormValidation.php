<?php
  if(isset($_POST['submit']))
  {
   validateData($_POST['name'],$_POST['priority'],$_POST['age'],$_POST['diseases'],$_POST['email'],$_POST['password'],$_POST['bloodgroup'],$_POST['allergies']);
  } else {
    $message = "registration unsuccessful";
echo "<script type='text/javascript'>alert('$message');</script>";
  }

  function validateData($name, $priority, $age, $diseases, $email, $password, $bloodgroup, $allergies){


  if(empty($name)){
     $message = "name is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
 } else if(empty($priority)) 
  {
    $message = "priority is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(empty($age)) 
  {
    $message = "age is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(strlen($age) > 3) 
  {
    $message = "your age should contain maximum 3 number";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(empty($diseases)) 
  {
    $message = "diseases is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($email))
  {
    $message = "email is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($password)) 
  {
    $message = "password is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($bloodgroup)) 
  {
    $message = "bloodgroup is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  }else if(empty($allergies)) 
  {
    $message = "allergies is empty";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else if(strlen($password) < 8) 
  {
    $message = "password filed should be longer than 8 characters";
echo "<script type='text/javascript'>alert('$message');</script>";
  } 
  else {
    $message = "login successful";
echo "<script type='text/javascript'>alert('$message');</script>";
  }
}
  ?> 