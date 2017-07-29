<?php
 /* Insert path to Moodle config here */

/*
 * Zendesk Remote Auth for Moodle 
 */
  
$sFullName = 'george'; 
$sEmail = 'georgesmith25d@gmail.com';
$sExternalID = '';
$sOrganization = ""; 

 /* Insert the Autentication Token here */
$sToken = "OLqeOedd3FZ3tHwj9qA7mXBa6ea3z4MbuumCVjNE"; 

 /* Insert your account prefix here. If your account is yoursite.zendesk.com: */
$sUrlPrefix = "designomate"; 

 /* Build the message */
$sTimestamp = isset($_GET['timestamp']) ? $_GET['timestamp'] : time(); 
$sMessage = $sFullName.$sEmail.$sExternalID.$sOrganization.$sToken.$sTimestamp; 
$sHash = MD5($sMessage); 

$sso_url = "http://".$sUrlPrefix.".zendesk.com/access/remote/?name=".$sFullName."&email=".$sEmail."&external_id=".$sExternalID."&organization=".$sOrganization."&timestamp=".$sTimestamp."&hash=".$sHash;

header("Location: ".$sso_url);
?>