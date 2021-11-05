<?php
session_start();
session_unset(); // remove all session variables
session_destroy(); // destroy the session
$msgErr="Logout Successfull!";
echo "<script type='text/javascript'>alert('$msgErr');</script>";
header("Refresh: 0, ../");
?>