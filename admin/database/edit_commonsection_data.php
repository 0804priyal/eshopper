<?php
include("connection.php");
	$insertQuery = "UPDATE commonsection set copyright = '".$_POST['copyright']."', copyrighttext = '".$_POST['copyrighttext']."' WHERE id='".$_POST['id']."'";

	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/edit_commonsection.php?x=1");
	} else {
		header("location: edit_commonsection_data.php?y=1");
	}
?>