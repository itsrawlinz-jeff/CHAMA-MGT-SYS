

<?php
session_start();
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'portal');
    $sql=mysqli_query($conn,"SELECT * FROM amosusers where EMAIL='$email' and PASSWORD='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION['name'] = $row['NAME'];
        $_SESSION['email'] = $row['EMAIL'];
        $_SESSION['password'] = $row['PASSWORD'];
        $message="Login Successfull!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh: 0, dashboard.php");	
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>