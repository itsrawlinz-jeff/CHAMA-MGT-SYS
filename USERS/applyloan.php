<?php
$conn = mysqli_connect('localhost', 'root', '', 'portal');

$applicant_name = $_POST['applicant_name'];
$identification = $_POST['identification'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$town = $_POST['town'];
$street = $_POST['street'];
$house = $_POST['house'];
$marital_status = $_POST['marital_status'];
$employment_terms = $_POST['employment_terms'];
$security_details = $_POST['security_details'];
$condition = $_POST['condition'];
$approval = $_POST['approval'];
$payment_period = $_POST['payment_period'];
$date = $_POST['date'];



$query = mysqli_query($conn, "insert into loan(applicant_name,identification,birthday,gender, address, town, street, house, marital_status, employment_terms, security_details, conditions, approval, payment_period, date ) 
VALUES('$applicant_name','$identification','$birthday', '$gender', '$address', '$town', '$street', '$house', '$marital_status', '$employment_terms', '$security_details', '$condition', '$approval', '$payment_period', '$date')");
$msgErr="success!";
echo "<script type='text/javascript'>alert('$msgErr');</script>";
header("Refresh: 0, loans.php");
?>