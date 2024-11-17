<?php 
include "../acm/AutoLoadRequirements.php";

if(isset($_POST['sendform'])){

	//initiate

	//data
	$FullName = $_POST['name'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];

	//Message Templates
	//Message Templates
	$Title = "Dear ".APP_INFO['APP_NAME'];
	$Message = "<p>contact form is received, please find the details mentioned below</p>";
	$Message .="<p>";
	$Message .="<br><br><span style='color:grey !important'>Name</span><br>".$_POST['name'];
	$Message .="<br><br><span style='color:grey !important'>EmailId</span><br>".$_POST['email'];
	$Message .="<br><br><span style='color:grey !important'>Service</span><br>".$_POST['service'];
	$Message .="<br><br><span style='color:grey !important'>Phone Number</span><br>".$_POST['phone'];
	$Message .="<br><br><span style='color:grey !important'>Message</span><br>".$_POST['message'];
	
	$Message .="</p>";
	$Subject = "Contact Form Received @ ".date("d M, Y h:i A");
	$SentTo = APP_EMAIL_ID['enquiry'];

	$status = SENDMAILS($Subject, $Title, $SentTo, $Message, false, $_POST['email']);

	header("location: ../index.php?msg=$status");
}