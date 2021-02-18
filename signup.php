<?php
require_once('Admin/include/config.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$insert = "INSERT INTO `pro_users` (`name`, `email`, `password`, `contact_number`, `shipping_address`) VALUES ('$name', '$email', '$password', '$number', '$address')";
//echo $insert;
	mysqli_query($conn,$insert);
	header("location:login.php?message=1");
?>