<?php
include("connection.php");
if (isset($_REQUEST['submit_links'])) {
	$insertQuery = "INSERT INTO commontable set quikslinks = '".$_POST['quikslinks']."'";
	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/view_commontable.php?x=1");
	} else {
		header("location: ../shop_admin/add_commontable.php?quikslinks=1");
	}
}


?>