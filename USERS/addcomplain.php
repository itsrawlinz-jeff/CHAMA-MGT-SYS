<?php
$conn = mysqli_connect('localhost', 'root', '', 'portal');

$headline = $_POST['headline'];
$message = $_POST['message'];
$date = $_POST['date'];
$sender = $_POST['sender'];
$status = $_POST['status'];

$query = mysqli_query($conn, "insert into complaints(headline,message,date,sender, status) VALUES('$headline','$message','$date', '$sender', '$status')"); 
$msgErr="Complain submitted successfully!";
echo "<script type='text/javascript'>alert('$msgErr');</script>";
header("Refresh: 0, complaints.php");
?>