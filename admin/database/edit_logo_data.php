<?php
include("connection.php");
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["logoimg"]["name"]);
$logoimg = $_FILES["logoimg"]["name"];

if (move_uploaded_file($_FILES["logoimg"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["logoimg"]["name"])). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }

	$insertQuery = "UPDATE logo set logoimg = '".$logoimg."' WHERE logo_id='".$_POST['logo_id']."'";

	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/view_logo.php?x=1");
	} else {
		header("location: ../shop_admin/edit_logo.php?y=1");
	}
?>