<?php
require_once('include/config.php');
$id = $_GET['d_id'];
$delete = "DELETE FROM `pro_categories` WHERE `id`=".$id;
mysqli_query($conn,$delete);
header('Location:category.php?success_message=2');
?>