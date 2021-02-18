<?php
require_once('include/config.php');
$id = $_POST['id'];
$category = $_POST['category'];
$updated_date = date('Y-m-d H:i:s');
$update="UPDATE `pro_categories` set `category_name`='".$category."',`updated_date`='".$updated_date."' where `id`=".$id;
echo $update;
mysqli_query($conn,$update);
header("Location:category.php?success_message=3");
?>