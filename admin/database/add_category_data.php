<?php
include("connection.php");
//print_r($_POST)
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["category_img"]["name"]);
$category_img = $_FILES["category_img"]["name"];

if (move_uploaded_file($_FILES["category_img"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["category_img"]["name"])). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
	$insertQuery = "INSERT INTO dresses set dresscatname = ".'"'.$_POST['dresscatname'].'"'.", category_img = '".$category_img."'";
	
	$checkEmailQuery = "SELECT * FROM `dresses` WHERE dresscatname='".$_POST['dresscatname']."'";

	//echo $checkEmailQuery; exit;
	$emailQuery = mysqli_query($conn, $checkEmailQuery);
	$rowcount = mysqli_num_rows($emailQuery);

	if ($rowcount==0) {
		$q = mysqli_query($conn,$insertQuery);
		header("location: ../shop_admin/list_category.php?x=1");
		//echo "Recored added";
	}
	else {
		header("location: ../shop_admin/add_category.php?y=1");
		//echo "Recored added failed";
	}	

?>



