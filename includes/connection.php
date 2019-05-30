<?php 
$host = "localhost";
$db_name = "users";
$user = "demo";
$password = "crud";
$table = "users";

$connection = mysqli_connect($host,$user,$password,$db_name) or die("Connection Error :".mysqli_connect_error());
?>
