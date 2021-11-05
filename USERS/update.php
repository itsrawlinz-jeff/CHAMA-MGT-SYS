
<?php
session_start();
$name = $_POST['name'];
$pass = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'portal');
mysqli_query($conn,"UPDATE amosusers set NAME='$name', PASSWORD='$pass'  where NAME ='" . $_SESSION['name'] . "' ");
$msgErr="Record Modified Successfully!";
echo "<script type='text/javascript'>alert('$msgErr');</script>";
header("Refresh: 0, profile.php");
?>