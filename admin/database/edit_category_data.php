<?php
include("connection.php");
	//print_r($_POST);
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["category_img"]["name"]);
$category_img = $_FILES["category_img"]["name"];

if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["category_img"]["name"])). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
	
	$insertQuery = "UPDATE dresses set dresscatname = '".$_POST['dresscatname']."', category_img = '".$category_img."' WHERE dress_id='".$_POST['dress_id']."'";

	//$checkCatName = "SELECT * FROM `dresses` WHERE dresscatname='".$_POST['dresscatname']."'";

	//echo $checkEmailQuery; exit;
	$insertdata = mysqli_query($conn,$insertQuery);
	
	if ($insertdata) {
		header("location: ../shop_admin/list_category.php?x=1");
		//echo "Recored added";
	}
	else {
		header("location: ../shop_admin/edit_category.php?y=1&id=".$_POST['dress_id']);
		//echo "Recored added failed";
	}

?>