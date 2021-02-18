<?php
session_start();
require_once('Admin/include/config.php');
if(isset($_POST['Login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$select = "SELECT * FROM `pro_users` WHERE `email`='$email' AND `password`='$password' ";
	$query = mysqli_query($conn,$select);
	if (mysqli_num_rows($query) > 0){
		$res = mysqli_fetch_assoc($query);
		$extra="index.php";
		$_SESSION['user_id'] = $res['id'];
		$_SESSION['user_name'] = $res['name'];
		$_SESSION['login']=$_POST['email'];
		$_SESSION['id']=$res['id'];
		$uip=$_SERVER['REMOTE_ADDR'];
		$status=1;
		$log=mysqli_query($conn,"insert into user_log(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:checkout2.php");
		exit();
	}else{
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($conn,"insert into user_log(userEmail,userip,status) values('$email','$uip','$status')");
		header("location:login.php?err=1");
	}
}
?>