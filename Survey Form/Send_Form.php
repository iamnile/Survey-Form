<?php

if (isset($_POST['submit'])) {
$Name_Of_Company = $_POST['Name_Of_Company'];
$Website_URL = $_POST['Website_URL'];
$Branding_Guidelines = $_POST['Branding_Guidelines'];
$Desired_Functionality = $_POST['Desired_Functionality'];
$Data_Location = $_POST['Data_Location'];
$Desired_Navigation_Method = $_POST['Desired_Navigation'];
$Desired_Access = $_POST['Desired_Access'];
$Specific_UI_Requests = $_POST['UI_Request'];
$Existing_Prototype = $_POST['Prototype'];
$Desired_Deadline = $_POST['Deadline'];
$Notes = $_POST['Notes'];

$from = 'MobileSmith'
$to = 'tony.orsa@MobileSmith.com';
$subject = 'MobileSmith Prototype Request';
$body = "Name Of Company: $Name_Of_Company \n
		 Website URL: $Website_URL \n
		 Branding_Guidelines: $Branding_Guidelines\n
		 Desired_Functionality: $Branding_Guidelines\n
		 Data_Location: $Data_Location\n
		 Desired_Navigation_Method: $Desired_Navigation\n
		 Desired_Access: $Desired_Access\n
		 Specific_UI_Requests: $Specific_UI_Requests\n
		 Existing_Prototype: $Existing_Prototype\n
		 Desired_Deadline: $Deadline\n
		 Notes: $Notes";



if (!$_POST['Name_Of_Company']) {
	$errNameofCo = 'You Forgot Company Name';
}

if (!$_POST['Website_URL']) {
	$errURL = 'You Forgot the Website URL';
}

if (!$_POST['Branding_Guidelines']) {
	$errBrand = 'You Forgot Branding_Guidelines';
}

if (!$errNameofCo && !$errURL && !$errBrand) {
	if (mail ($to, $subject, $body, $from)) {
		$result = '<div class="alert alert-success">Your Request Was Successfully Sent</div>'
	}
	else {
		$result = '<div class="alert alert-danger">Your Request Was Not Successfully Sent</div>'
	}
}

if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
}

?>