<?php
include("connection.php");
	$checkEmail = "SELECT * FROM `registration` WHERE email='".$_POST['email']."'";

	$checkEmailPassw = "SELECT * FROM `registration` WHERE email='".$_POST['email']."' AND passw = '".($_POST['passw'])."'";
		
		$emailQuery = mysqli_query($conn, $checkEmail);
		$emailPasswQuery = mysqli_query($conn, $checkEmailPassw);
		$rowcount = mysqli_num_rows($emailQuery);
		$rowcountEmailPassw = mysqli_num_rows($emailPasswQuery);
		if ($rowcount==0) {		
			header("location: ../registration.php?error=1");		
		}elseif($rowcountEmailPassw==0) {
			header("location: ../forgot_password.php?error=1");
		}
		else {
			session_start();
			$data = $conn->query($checkEmailPassw);
			//print_r($data);exit;
			$row=$data->fetch_assoc();
			$_SESSION['id'] = $row['id'];
			$_SESSION['firstname']=$row['firstname'];				
			header("location: ../index.php");			
		}
?>