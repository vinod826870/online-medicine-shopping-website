<?php
require_once('include/config.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$insert = "INSERT INTO `pro_admin` (`first-name`, `last-name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
mysqli_query($conn,$insert);
header('location:login.php');
?>