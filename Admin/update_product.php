<?php
require_once("include/config.php");
$category = $_POST['category'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
$id = $_POST['id'];
if($_FILES['new_image']['name'] != ''){
	$ex_file = $_POST['ex_file'];
	$newimage=$_FILES["new_image"]["name"];
	$soruce = $_FILES['new_image']['tmp_name'];
	$dest = "./img/".$newimage;
	move_uploaded_file($soruce,$dest);
	unlink('img/'.$ex_file);
	$update = "UPDATE `pro_products` SET `cat_id`='".$category."', `product_name`='".$product_name."',`product_price`='".$product_price."',`product_description`='".$product_description."',`product_image`='".$newimage."' WHERE `id`=".$id;
	mysqli_query($conn,$update);
	echo $update;
}else{
	$update = "UPDATE `pro_products` SET `cat_id`='".$category."',`product_name`='".$product_name."',`product_price`='".$product_price."',`product_description`='".$product_description."' WHERE `id`=".$id;
	mysqli_query($conn,$update);
	echo $update;
}
header("Location:manage-products.php?msg=2");
?>