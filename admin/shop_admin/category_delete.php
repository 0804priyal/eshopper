<?php
include("../database/connection.php");
	$dress_id=$_REQUEST['id'];
	$dresscatname=$_REQUEST['dresscatname'];

	//echo $dress_id;
$delete ="DELETE FROM dresses WHERE dress_id='".$_GET['id']."'";
$emailQuery = mysqli_query($conn, $delete);
header("location: ../shop_admin/list_category.php?delete=1&dresscatname=".$_GET['dresscatname']);
?>