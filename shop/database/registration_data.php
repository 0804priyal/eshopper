<?php
require("connection.php");
//print_r($_POST);
       function sendEmail($token){
			$link = "<a href='http://localhost/shop/shop/confirmation.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
			$to = $_POST['email'];
			$subject = 'Account confirmation link';
			$from = 'eshopper@info.com';
			 
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 
			// Create email headers
			$headers .= 'From: '.$from."\r\n".
			    'Reply-To: '.$from."\r\n" .
			    'X-Mailer: PHP/' . phpversion();
			 
			// Compose a simple HTML email message
			$message = '<html><body>';
			$message .= '<h1 style="color:#f40;">Hi '.$_POST['firstname'].'</h1>';
			$message .= '<p style="color:#080;font-size:18px;">Please confirm your account'.$link.'</p>';
			$message .= '</body></html>';
			 
			// Sending email
		mail($to, $subject, $message, $headers);
       }
       $token = md5($_POST['email']).rand(10,9999);
	$insertQuery = "INSERT INTO registration set firstname = '".$_POST['firstname']."', lname = '".$_POST['lname']."', email = '".$_POST['email']."', mobile = '".$_POST['mobile']."', address1 = '".$_POST['address1']."', address2 = '".$_POST['address2']."', country = '".$_POST['country']."', city = '".$_POST['city']."', state = '".$_POST['state']."', zipcode = '".$_POST['zipcode']."', passw = '".$_POST['passw']."', token = $token";

	if ($conn->query($insertQuery) === TRUE) {
		sendEmail($token);
		//echo "New record created successfully";
		header("location: ../login.php?x=1");
		} else {
		//echo "Error: " . $insertQuery . "<br>" . $conn->error;
		header("location: ../registration.php?y=1");
		}$conn->close();
?>
