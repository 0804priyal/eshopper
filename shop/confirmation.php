<?php
require("database/connection.php");
//$email = $_GET['key'];
//$token = $_GET['token'];
$insertQuery = "SELECT * from registration";

$checkEmailQuery = "SELECT * FROM `registration` WHERE email='".$_GET['key']."' AND token='".$_GET['token']."'";
$emailQuery = mysqli_query($conn, $checkEmailQuery);

	$rowcount = mysqli_num_rows($emailQuery);

	if ($rowcount==1) {
		$updatequery = "UPDATE registration set confirmation = 1, token=NULL WHERE email='".$_GET['key']."' AND token='".$_GET['token']."'";
		echo $updatequery;
		//exit();
		$emailQuery = mysqli_query($conn, $updatequery);
		echo "Your account is confirm";
	}
	else {
		echo "Token is expired";
		//echo "Recored added failed";
	}	

?>
