<?php 
include "../acm/AutoLoadRequirements.php";

if(isset($_POST['SendEnquiry'])){

	//initiate

	//data
	$FullName = $_POST['FullName'];
	$email = $_POST['EmailId'];
	$service = $_POST['Requirement'];
	$message = $_POST['message'];
	$phone = $_POST['PhoneNumber'];

	//Message Templates
	//Message Templates
	$Title = "Dear ".APP_INFO['APP_NAME'];
	$Message = "<p>enquiry is received, please find the details mentioned below</p>";
	$Message .="<p>";
	$Message .="<br><br><span style='color:grey !important'>Name</span><br>".$_POST['name'];
	$Message .="<br><br><span style='color:grey !important'>EmailId</span><br>".$_POST['email'];
	$Message .="<br><br><span style='color:grey !important'>Required Service</span><br>".$_POST['service'];
	$Message .="<br><br><span style='color:grey !important'>Phone Number</span><br>".$_POST['phone'];
	$Message .="<br><br><span style='color:grey !important'>Message</span><br>".$_POST['message'];
	
	$Message .="</p>";
	$Subject = "Enquiry Received @ ".date("d M, Y h:i A");
	$SentTo = APP_EMAIL_ID['enquiry'];

	$status = SENDMAILS($Subject, $Title, $SentTo, $Message, false, $_POST['email']);

	header("location: ../index.php?msg=$status");
}