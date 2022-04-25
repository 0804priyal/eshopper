<?php
require("database/connection.php");
//$email = $_GET['key'];
$forgot_token = $_GET['forgot_token'];
$email = $_GET['key'];


$insertQuery = "SELECT * from registration";

$checkEmailQuery = "SELECT * FROM `registration` WHERE forgot_token='".$_GET['forgot_token']."' AND email='".$_GET['key']."'";

$emailQuery = mysqli_query($conn, $checkEmailQuery);

	$rowcount = mysqli_num_rows($emailQuery);
	
	if ($rowcount==1) {
		
		//$updatequery = "UPDATE registration set confirmation = 1, forgot_token=NULL WHERE email='".$_GET['key']."' AND forgot_token='".$_GET['forgot_token']."'";
		
		//$emailQuery = mysqli_query($conn, $updatequery);
		//echo $emailQuery;
		//exit();
		echo "Your account is confirm do this";
		header("location: reset_password.php?x=$email");
	}
	else {
		echo "Token is expired please";
		//echo "Recored added failed";
	}	

?>
