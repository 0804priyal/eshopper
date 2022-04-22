<?php
include("connection.php");
	$insertQuery = "UPDATE efooter set etext = '".$_POST['etext']."', eadd = '".$_POST['eadd']."', eemail = '".$_POST['eemail']."', ephone = '".$_POST['ephone']."', yourname = '".$_POST['yourname']."', youremail = '".$_POST['youremail']."' WHERE efooter_id='".$_POST['efooter_id']."'";

	$insertdata = mysqli_query($conn,$insertQuery);
	if ($insertdata) {
		header("location: ../shop_admin/edit_footer.php?x=1");
	} else {
		header("location: edit_footer_data.php?y=1");
	}
?>