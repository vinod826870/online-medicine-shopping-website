<?php
	require_once('include/config.php');
	$id=$_GET['e_id'];
	$select="SELECT * FROM `pro_categories` where `id`=".$id;
	$query=mysqli_query($conn, $select);
	$res=mysqli_fetch_assoc($query);
	echo json_encode($res);
?>