<?php
include("../database/connection.php");
	$logo_id=$_REQUEST['id'];
	//$dresscatname=$_REQUEST['dresscatname'];

	//echo $dress_id;
$delete ="DELETE FROM logo WHERE logo_id='".$_GET['id']."'";
$emailQuery = mysqli_query($conn, $delete);
header("location: ../shop_admin/view_logo.php?delete=1");
?>