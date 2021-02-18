<?php
require_once('include/config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$select = "SELECT * FROM `pro_admin` WHERE `email`='$email' AND `password`='$password' ";
$query = mysqli_query($conn,$select);
if (mysqli_num_rows($query) > 0){
	$res = mysqli_fetch_assoc($query);
	session_start();
	$_SESSION['medicine_id'] = $res['id'];
	$_SESSION['medicine_name'] = $res['first_name'];
	header("location:index.php");
}else{
	header("location:login.php?err=1");
}
?>