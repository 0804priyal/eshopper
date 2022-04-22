<?php
include("connection.php");
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["bannerimg"]["name"]);
$bannerimg = $_FILES["bannerimg"]["name"];
if (move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $target_file)) {
      //echo "The file ". htmlspecialchars( basename( $_FILES["bannerimg"]["name"])). " has been uploaded.";
  } else {
      //echo "Sorry, there was an error uploading your file.";
  }

	$insertQuery = "INSERT INTO banner set bannertext = '".$_POST['bannertext']."', bannerhead = '".$_POST['bannerhead']."', bannerimg = '".$bannerimg."'";

	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/list_banner.php?x=1");
	} else {
		header("location: ../shop_admin/add_banner.php?y=1");
	}
?>



