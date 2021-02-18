<?php
session_start();
unset($_SESSION['medicine_id']);
unset($_SESSION['medicine_name']);
$_SESSION['alogin']=="";
header('location:login.php');
?>