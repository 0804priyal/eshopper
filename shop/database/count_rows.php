<?php 
	include("header_card.php");
    include("database/connection.php");
    $sql="SELECT COUNT(*) FROM add_card WHERE user_id = 7";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    echo "$row[0]";

?>