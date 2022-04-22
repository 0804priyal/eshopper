<?php
require("connection.php");
print_r($_POST);

	$insertQuery = "UPDATE contactus set contactushead = '".$_POST['contactushead']."', getintouch = '".$_POST['getintouch']."', store1add = '".$_POST['store1add']."', store1email = '".$_POST['store1email']."', store1phone = '".$_POST['store1phone']."', store2add = '".$_POST['store2add']."', store2email = '".$_POST['store2email']."', store2phone = '".$_POST['store2phone']."' WHERE id = 1 ";
		
	if ($conn->query($insertQuery) === TRUE) {
		//echo "New record created successfully";
		header("location: ../shop_admin/contact.php?x=1");
		} else {
		//echo "Error: " . $insertQuery . "<br>" . $conn->error;
		header("location: ../shop_admin/contact.php?y=1");
		}$conn->close();
?>
