<?php
include("connection.php");
	$checkEmailQuery = "SELECT * FROM `registration` WHERE email='".$_POST['email']."' AND passw = '".($_POST['passw'])."'";
		
		$emailQuery = mysqli_query($conn, $checkEmailQuery);
		$rowcount = mysqli_num_rows($emailQuery);
		if ($rowcount==0) {		
			header("location: ../login.php?x=1");		
		}
		else {
			session_start();
			$data = $conn->query($checkEmailQuery);
			//print_r($data);exit;
			$row=$data->fetch_assoc();
			$_SESSION['id'] = $row['id'];
			$_SESSION['firstname']=$row['firstname'];				
			header("location: ../index.php");			
		}
?>