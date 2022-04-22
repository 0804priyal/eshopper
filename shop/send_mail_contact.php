<?php
include("database/connection.php");
$yourname = $_POST['yourname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message2 = $_POST['message'];

         $to = "$email";
         $subject = "$subject";
         
         $message = "<h1>Thank you: $yourname</h1>";
         $message .= "<p>$message2</p>";
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:kumarsh178@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "Message sent successfully...";
            header("location: contact.php?x=1");
         }else {
            //echo "Message could not be sent...";
            header("location: contact.php?y=1");
         }
?>