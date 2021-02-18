<?php
	require_once('include/config.php');
	$category = $_POST['category'];
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_description = $_POST['product_description'];
	$productimage = $_FILES["productimage"]["name"];
	$soruce = $_FILES['productimage']['tmp_name'];
	$dest = "./img/".$productimage;
	move_uploaded_file($soruce,$dest);
	$insert = "insert into pro_products
	(cat_id,product_name,product_price,product_description,product_image) values('$category','$product_name','$product_price','$product_description','$productimage')";
	$sql=mysqli_query($conn,$insert);
	echo $insert;
	header('Location:insert-product.php?msg=5');
?>