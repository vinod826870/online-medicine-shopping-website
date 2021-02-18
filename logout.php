<?php
session_start();
require_once('Admin/include/config.php');
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($conn,"UPDATE user_log  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
//session_unset();
header('location:index.php');
?>