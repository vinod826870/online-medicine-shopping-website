<?php
require_once('include/config.php');
if (isset($_POST['categories'])) {
	$category_name = $_POST['category_name'];
	$created_date = date('Y-m-d H:i:s');
echo $insert = "INSERT INTO `pro_categories`(`category_name`,`created_date`) VALUES('".$category_name."','".$created_date."')";
	mysqli_query($conn,$insert);
	header('location:category.php?success_message=1');
}
?>