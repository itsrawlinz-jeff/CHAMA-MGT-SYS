<?php
$conn = mysqli_connect('localhost', 'root', '', 'portal');

$holder_name = $_POST['holder_name'];
$bank_name = $_POST['bank_name'];
$branch_name = $_POST['branch_name'];
$account_no = $_POST['account_no'];
$account_type = $_POST['account_type'];

$query = mysqli_query($conn, "insert into bank_info(holder_name, bank_name, branch_name, account_number, account_type) VALUES('$holder_name','$bank_name','$branch_name', '$account_no', '$account_type')"); 
$msgErr="success!";
echo "<script type='text/javascript'>alert('$msgErr');</script>";
header("Refresh: 0, bankinfo.php");
?>