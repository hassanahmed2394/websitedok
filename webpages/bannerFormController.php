<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "order@websitedok.com";

# SUBJECT (Subscribe/Remove)
$subject = "Banner Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thank-you";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@websitedok.com";

# MAIL BODY
$subscriber_email = $_REQUEST['Email'];
$subscriber_subject = "Thankyou!! One of Our Consultant Will Get Back To you Shortly
";
$subscriber_email_data = file_get_contents('https://www.websitedok.com/email/queryFormThankyou.html');

if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['Name']) && $_REQUEST['Name'] != "" 
  && isset($_REQUEST['Email']) && $_REQUEST['Email'] != "" 
  && isset($_REQUEST['Number']) && $_REQUEST['Number'] != ""){


$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
$body .= "Country Code: ".$_REQUEST['pc']." \n";
$body .= "Country Name: ".$_REQUEST['ctry']." \n";
$body .= "Visitor's IP: ".$_REQUEST['cip']." \n";
$body .= "Number: ".$_REQUEST['Number']." \n";
$body .= "Message: ".$_REQUEST['message']." \n";
$body .= "Page URL: ".$_REQUEST['blocationURL']." \n";

// $body .= "Page: ".$ebpage." \n";

if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into bannerForm (cust_name ,cust_email ,cust_phonenumber ,cust_message ,pageURL,countryCode,countryName,VisitorIP ) values ("'.$_REQUEST['Name'].'","'.$_REQUEST['Email'].'","'.$_REQUEST['Number'].'","'.$_REQUEST['message'].'","'.$_REQUEST['blocationURL'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['cip'].'")';
mysqli_query($con,$sql);
mysqli_close($con);
}

$headers = "From: " . $sender . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );

 }

    
}

?>
