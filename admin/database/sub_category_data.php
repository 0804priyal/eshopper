<?php
include("connection.php");
//print_r($_POST)
$target_dir = "../bannerimg/";
$target_file = $target_dir . basename($_FILES["sub_img"]["name"]);
$sub_img = $_FILES["sub_img"]["name"];

if (move_uploaded_file($_FILES["sub_img"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["sub_img"]["name"])). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
	$insertQuery = "INSERT INTO sub_category set dress_id = '".$_POST['dress_id']."', sub_category_name = ".'"'.$_POST['sub_category_name'].'"'.", sub_img = '".$sub_img."'";
		
	
	$datainsert = mysqli_query($conn,$insertQuery);

	if ($datainsert) {
		header("location: ../shop_admin/list_sub_category.php?x=1");
		//echo "Recored added";
	}
	else {
		header("location: ../shop_admin/sub_category.php?y=1");
		//echo "Recored added failed";
	}	

?>



