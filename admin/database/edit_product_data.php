<?php
include("connection.php");
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["productimg"]["name"]);
$productimg = $_FILES["productimg"]["name"];

if (move_uploaded_file($_FILES["productimg"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["productimg"]["name"])). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }

	$insertQuery = "UPDATE products set cat_id = '".$_POST['cat_id']."', productimg = '".$productimg."', productname = '".$_POST['productname']."', productprice = '".$_POST['productprice']."', offerprice = '".$_POST['offerprice']."', shortdescription = '".$_POST['shortdescription']."', size = '".$_POST['size']."', color = '".$_POST['color']."', fulldescription = '".$_POST['fulldescription']."', information = '".$_POST['information']."' WHERE product_id='".$_POST['product_id']."'";

	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/list_product.php?x=1");
	} else {
		header("location: ../shop_admin/edit_product_data.php?y=1");
	}
?>