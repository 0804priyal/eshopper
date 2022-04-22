<?php
include("connection.php");
	$checkEmailQuery = "SELECT * FROM `login` WHERE email='".$_POST['email']."' AND passw = '".md5($_POST['passw'])."'";

		$emailQuery = mysqli_query($conn, $checkEmailQuery);
		$rowcount = mysqli_num_rows($emailQuery);
		if ($rowcount==0) {		
			header("location: ../index.php?x=1");		
		}
		else {
			session_start();
			$data = $conn->query($checkEmailQuery);
			//print_r($data);exit;
			$row=$data->fetch_assoc();
			$_SESSION['id'] = $row['login_id'];
			$_SESSION['username']=$row['username'];				
			header("location: ../shop_admin/index.php?y=1");			
		}
?>