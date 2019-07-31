<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "order@websitedok.com";

# SUBJECT (Subscribe/Remove)
$subject = "Floating Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thank-you";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@websitedok.com";

# MAIL BODY
$subscriber_email = $_REQUEST['useremail'];
$subscriber_subject = "Thankyou!! One of Our Consultant Will Get Back To you Shortly
";
$subscriber_email_data = file_get_contents('https://www.websitedok.com/email/queryFormThankyou.html');


if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['username']) && $_REQUEST['username'] != "" 
  && isset($_REQUEST['useremail']) && $_REQUEST['useremail'] != "" 
  && isset($_REQUEST['userphone']) && $_REQUEST['userphone'] != "" 
  && isset($_REQUEST['userdetail']) && $_REQUEST['userdetail'] != ""){



$body .= "Name: ".$_REQUEST['username']." \n";
$body .= "Email: ".$_REQUEST['useremail']." \n";
$body .= "Country Code: ".$_REQUEST['pc']." \n";
$body .= "Country Name: ".$_REQUEST['ctry']." \n";
$body .= "Visitor's IP: ".$_REQUEST['cip']." \n";
$body .= "Phone: ".$_REQUEST['userphone']." \n";
$body .= "Detail: ".$_REQUEST['userdetail']." \n";
$body .= "Page URL: ".$_REQUEST['blocationURL']." \n";
$myservices = implode(',', $_POST['services']);

$body .= "Services : ".$myservices." \n";



// $body .= "PublishingGoals: ".$checkPublishingGoal." \n";

if($_FILES["file"]["error"]>0)
{
    echo "FILE ERROR";
    die();
}
// $filename = "FOLDER/".$_FILES["file"]["name"];

 $info = pathinfo($_FILES['wordfile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = time().'.'.$ext; 

$target = '../Folder/'.$newname;
// move file to a folder
if (!move_uploaded_file($_FILES["wordfile"]["tmp_name"], $target)) { 
    //  echo "Sorry, there was an error uploading your file.";
    //  die();
    $target = 'No file attached';
 }

$body .= "file: ".$target." \n";





if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into bottomFORM (cust_name,cust_email,cust_phonenumber,cust_message,pageURL,service_interest,attachment_path) values ("'.$_REQUEST['username'].'","'.$_REQUEST['useremail'].'","'.$_REQUEST['userphone'].'","'.$_REQUEST['userdetail'].'","'.$_REQUEST['blocationURL'].'","'.$myservices.'","'.$target.'","'.$_REQUEST['pc'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['VisitorIP'].'")';

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
