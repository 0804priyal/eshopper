<?php
include("connection.php");
$email=$_POST['email'];
$passw=$_POST['passw'];


$checkEmailQuery = "SELECT * FROM `registration` WHERE email='".$_POST['email']."'";


$emailQuery = mysqli_query($conn, $checkEmailQuery);
$rowcount = mysqli_num_rows($emailQuery);
if ($rowcount==1) {
    
$updatequery = "UPDATE registration set confirmation = 1, forgot_token=NULL, passw='".$_POST['passw']."' WHERE email='".$_POST['email']."'";
//echo $updatequery;
//exit();
$emailQuery = mysqli_query($conn, $updatequery);

echo "Your account is confirm do this";
header("location: ../login.php?x=1");
}
else {
    echo "Token is expired please";
   header("location: reset_password.php?y=1");
}
?>