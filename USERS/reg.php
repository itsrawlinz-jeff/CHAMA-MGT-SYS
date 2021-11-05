<?php
$conn = mysqli_connect('localhost', 'root', '', 'portal');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpass = $_POST['confirm_password'];




if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $msg="$email is a valid email address!";
   echo "<script type='text/javascript'>alert('$msg');</script>";
   if ($password === $confirmpass) {
      $query = mysqli_query($conn, "insert into amosusers(NAME,EMAIL,PASSWORD) VALUES('$name','$email','$password')"); 
      $message="Registration Successfull!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("Refresh: 0, ../");
   }
   else {
      $messageErr="ERROR! Password did not match!";
      echo "<script type='text/javascript'>alert('$messageErr');</script>";
   }
 }
 else{
   $msgErr="$email is not a valid email address!";
   echo "<script type='text/javascript'>alert('$msgErr');</script>";
   header("Refresh: 0, register.php");
 }



 


?>