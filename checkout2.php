<?php
require_once('Admin/include/config.php');
require_once('database_connection.php');
session_start();
if(strlen($_SESSION['login'])==0)
{
header('location:login.php');
}else{
//print_r($_SESSION['shopping_cart']);
//echo $_SESSION['user_id'];
$uid=$_SESSION['user_id'];
$payMethod=$_POST['paymethod'];
//echo "<br>".$_SESSION['tprice'];
$date=date('Y-m-d H:i:s');
foreach($_SESSION["shopping_cart"] as $keys => $values){
	$productId=$_SESSION['shopping_cart'][$keys]['product_id'];
	$quantity=$_SESSION['shopping_cart'][$keys]['product_quantity'];
	$insert="INSERT INTO `pro_orders`( `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`) VALUES ('".$uid."','".$productId."','".$quantity."','".$date."','".$payMethod."')";
	mysqli_query($conn,$insert);
}
header('Location:order-history.php');
unset($_SESSION["shopping_cart"]);
}
?>