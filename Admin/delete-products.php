 
  <?php
require_once('include/config.php');
$id=$_GET['id'];
$select="SELECT * FROM `pro_products` WHERE `id`=".$id;
$query=mysqli_query($conn,$select);
$res=mysqli_fetch_assoc($query);
$file_name=$res['product_image'];
unlink('./img/'.$file_name);
$delete="DELETE FROM `pro_products` WHERE `id`=".$id;
mysqli_query($conn,$delete);
header('Location:manage-products.php?msg=1');
?>