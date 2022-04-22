<?php
include("../database/connection.php");
	$product_id=$_REQUEST['id'];
	$productname=$_REQUEST['productname'];

	//echo $dress_id;
$delete ="DELETE FROM products WHERE product_id='".$_GET['id']."'";
$emailQuery = mysqli_query($conn, $delete);
header("location: ../shop_admin/list_product.php?delete=1&productname=".$_GET['productname']);
?>