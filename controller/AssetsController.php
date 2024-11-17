<?php 
include "../acm/AutoLoadRequirements.php";

if(isset($_POST['SendFormToAdmin'])){

	//initiate

	//data
	$ConsultantName = $_POST['ConsultantName'];
	$SelectedCountry = $_POST['SelectedCountry'];
	$FullName = $_POST['FullName'];
	$DateOfBirth = $_POST['DateOfBirth'];
	$FatherName = $_POST['FatherName'];
	$MotherName = $_POST['MotherName'];
	$Phonenumber = $_POST['Phonenumber'];
	$EmailId = $_POST['EmailId'];
	$CurrentAddress = $_POST['CurrentAddress'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$GoneStatus = $_POST['GoneStatus'];
	$SpouseWorkExperience = $_POST['SpouseWorkExperience'];
	$NumberOfKids = $_POST['NumberOfKids'];
	$BachlerDegreeName = $_POST['BachlerDegreeName'];
	$MasterDegreeName = $_POST['MasterDegreeName'];
	$DiplomaName = $_POST['DiplomaName'];
	$OthersName = $_POST['OthersName'];
	$CurrentCTC = $_POST['CurrentCTC'];
	$TotalWorkExperience = $_POST['TotalWorkExperience'];

//$dir name
	$DirName = date("Y_m_d")."_".$_POST['EmailId'];

	//documents
	$IDPROOF = UPLOAD_FILES("../uploads/$DirName", "null", "ID_PROOF", $_POST['FullName'], "IDPROOF");
	$LatestCV = UPLOAD_FILES("../uploads/$DirName", "null", "Latest_CV", $_POST['FullName'], "LatestCV");
	$EducationalDocs = UPLOAD_FILES("../uploads/$DirName", "null", "EduDocs", $_POST['FullName'], "EducationalDocs");
	$OtherDocs = UPLOAD_FILES("../uploads/$DirName", "null", "OtherDocs", $_POST['FullName'], "OtherDocs");

	//Message Templates
	$Title = "Dear ".APP_INFO['APP_NAME'];
	$Message = "<p>Evalution form is received, please find the details mentioned below</p>";
	$Message .="<p>";
	$Message .="<br><br><span style='color:grey !important'>ConsultantName</span><br>".$_POST['ConsultantName'];
	$Message .="<br><br><span style='color:grey !important'>SelectedCountry</span><br>".$_POST['SelectedCountry'];
	$Message .="<br><br><span style='color:grey !important'>FullName</span><br>".$_POST['FullName'];
	$Message .="<br><br><span style='color:grey !important'>DateOfBirth</span><br>".date("d M, Y", strtotime($_POST['DateOfBirth']));
	$Message .="<br><br><span style='color:grey !important'>FatherName</span><br>".$_POST['FatherName'];
	$Message .="<br><br><span style='color:grey !important'>MotherName</span><br>".$_POST['MotherName'];
	$Message .="<br><br><span style='color:grey !important'>Phonenumber</span><br>".$_POST['Phonenumber'];
	$Message .="<br><br><span style='color:grey !important'>EmailId</span><br>".$_POST['EmailId'];
	$Message .="<br><br><span style='color:grey !important'>CurrentAddress</span><br>".$_POST['CurrentAddress'];
	$Message .="<br><br><span style='color:grey !important'>MaritalStatus</span><br>".$_POST['MaritalStatus'];
	$Message .="<br><br><span style='color:grey !important'>GoneStatus</span><br>".$_POST['GoneStatus'];
	$Message .="<br><br><span style='color:grey !important'>SpouseWorkExperience</span><br>".$_POST['SpouseWorkExperience'];
	$Message .="<br><br><span style='color:grey !important'>NumberOfKids</span><br>".$_POST['NumberOfKids'];
	$Message .="<br><br><span style='color:grey !important'>BachlerDegreeName</span><br>".$_POST['BachlerDegreeName'];
	$Message .="<br><br><span style='color:grey !important'>MasterDegreeName</span><br>".$_POST['MasterDegreeName'];
	$Message .="<br><br><span style='color:grey !important'>DiplomaName</span><br>".$_POST['DiplomaName'];
	$Message .="<br><br><span style='color:grey !important'>OthersName</span><br>".$_POST['OthersName'];
	$Message .="<br><br><span style='color:grey !important'>CurrentCTC</span><br>".$_POST['CurrentCTC'];
	$Message .="<br><br><span style='color:grey !important'>TotalWorkExperience</span><br>".$_POST['TotalWorkExperience'];
	$Message .="<br><br><span style='color:grey !important'>DocDirName</span><br>".$DirName;
	$Message .="</p>";
	$Subject = "Evalution Form Received @ ".$_POST['FullName']." ".$_POST['Phonenumber'];
	$SentTo = APP_EMAIL_ID['enquiry'];
	
	if($IDPROOF ==null){
	    $IDPROOF = "null.text";
	}
	
	if($LatestCV ==null){
	    $LatestCV = "null.text";
	}
	
	if($EducationalDocs ==null){
	    $EducationalDocs = "null.text";
	}
	
	if($OtherDocs ==null){
	    $OtherDocs = "null.text";
	}
	
	$Documents = [
		"ID Proof"=>"../uploads/$DirName/$IDPROOF",
		"Latest CV"=>"../uploads/$DirName/$LatestCV",
		"Education Docs"=>"../uploads/$DirName/$EducationalDocs",
		"Other Docs"=>"../uploads/$DirName/$OtherDocs",
	];

	$status = SENDMAILS($Subject, $Title, $SentTo, $Message, false, $_POST['EmailId'], $Documents);

	header("location: ../index.php?msg=$status");
}