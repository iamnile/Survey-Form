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
}

?>




<head>
    <link href="CeruleanBootstrap.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    

       <div style="text-align:center; -webkit-transition:all .2s ease-in-out; "> <h1 style=" text-align:center;">MobileSmith Prototype Request</h1>
        <h3 style=" text-align:center; ">Please Use This Form to Request a Proof of Concept App.</h3></div>
    <br />
   <div class="container">
     
       <div class="col-md-3"></div>
	   <div class="col-md-6">
		<div class="well">
        <form role="form" enctype="text/plain" action="" method="post">
            <br />
            <div class="form-group">
            <label for="companyName">Name of Company</label>
                <input name="Name_of_Company" type="text" required class="form-control" id="companyName"/>
            </div>

            <div class="form-group">
            <label for="websiteURL">Website URL</label>
                <input name="Website_URL" type="text" required class="form-control" id="websiteURL"/>
            </div>

            <div class="form-group">
            <label for="brandingGuidelines">Branding Guidelines</label>
                <input name="Branding_Guidelines" type="text" required class="form-control" id="brandingGuidelines"/>
            </div>

            <div class="form-group">
            <label for="desiredFnD">Desired Functionality & Data</label>
                <input type="text" id="desiredFnD" class="form-control" name="Desired_Functionality"/>
            </div>

            <div class="form-group">
            <label for="dataLocation">Where is the Data Located?</label>
                <input type="text" id="dataLocation" class="form-control" name="dataLocation"/>
            </div>

            <div class="form-group">
            <label class="text-danger" for="dataMethod">Remember to Attatch the Data in the Email When You Submit</label>
            </div>

			<div class="form-group">
            <label for="dataLocation">Desired Navigation Method</label>
                <select id="dataLocation" class="form-control" name="desiredNavigationMethod">
                    <option>Choose One</option>
                    <option>Fly-Out Menu</option>
                    <option>Tabs Menu</option>
                    <option>No Menu</option>
           </select> 
           </div>


            <div class="form-group">
            <label for="dataLocation">Desired Access Method</label>
                <select id="dataLocation" class="form-control" name="desiredAccessMethod">
                    <option>Choose One</option>
                    <option>Unrestricted</option>
                    <option>App Activation</option>
                    <option>Registration Required</option>
           		</select> 
           </div>
			
            <div class="form-group">
            <label for="dataLocation">Specific UI Requests</label>
                <input type="text" id="dataLocation" class="form-control" name="specificUIrequests"/>
            </div>

            <div class="form-group">
            <label for="dataLocation">Existing Prototype You'd Like to Model</label>
                <input type="text" id="dataLocation" class="form-control" name="existingPrototype"/>
            </div>

            <div class="form-group">
            <label for="dataLocation">Desired Deadline (1 Week From Submission)</label>
                <input type="date" id="dataLocation" class="form-control" name="desiredDeadline"/>
            </div>

            <div class="form-group">
            <label for="dataLocation">Notes</label>
                <textarea id="dataLocation" class="form-control" name="notes">
                    Enter comments Here
                </textarea>
            </div>

           <input type="submit" class="btn btn-primary">


            


			</div>
         </form>
		 </div>
		 <div class="col-md-3"></div>
       </div>
      
    </div>
</body>
