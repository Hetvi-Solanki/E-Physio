<?php     
$headers = "From:PhysioAtDoor <physioatdoor01@gmail.com>\r\n";
$to = (isset($_GET['email']) ? $_GET['email'] : '');
//$time = (isset($_GET['timeslot']) ? $_GET['timeslot'] : '');
//$date = (isset($_GET['booking_date']) ? $_GET['booking_date'] : '');
$subject = 'Appointment Disapproved';
$message = 'Sorry! Your Appointment for Physiotherapist is disapproved
Choose other time or date.
Thank You & Regards
From: Physio At Door';

if(mail($to,$subject,$message,$headers))
	echo "<script>alert('Mail sent');</script>";
else
	echo "<script>alert('Mail not sent');</script>";
?>