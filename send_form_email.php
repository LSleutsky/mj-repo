<!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <title>MJ Repo Services - Auto Repossession and Recovery</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
    <meta name="title" content="MJ Repo Services - Auto Repossession and Recovery" />
    <meta name="language" content="English" />
    <meta name="copyright" content="MJ Repo Services" />

    <meta name="description" content="text" />
    <meta name="description" content="MJ Repo Services" />
    <meta name="description" content="MJ Repo Services - Auto Repossession and Recovery" />
    <meta name="description" content="MJ Repo Services provides vehicle repossession and recovery services for Philadelphia, New Jersey, and Delaware" />
    <meta name="description" content="MJ Repo Services provides towing and recovery services for Philadelphia, South Jersey, and Delaware" />
    
    <meta name="keywords" content="text" />
    <meta name="keywords" content="Auto Repossession, Auto Recovery, Automobile Recovery, Recreation Vehicle Recovery, ATV Recovery, RV Recovery, Truck Recovery, Recovery Specialist, Repossession Service, Philadelphia Repossession Company, Collateral Recovery, Tri-State Repossession, Repo man, Repossession Agent, Philadelphia Repossession Company, Automobile Repossession, Recreation Vehicle Repossession, ATV Repossession, RV Repossession, Truck Repossession, Tri-State Vehicle Recovery, Delaware Repossession, New Jersey Repossession, New Jersey Vehicle Recovery, Delaware Vehicle Recovery, South Jersey Repossession, South Jersey Vehicle Recovery" />
    <meta name="keywords" content="Philadelphia Repossession, New Jersey Repossession, Delaware Repossession, South Jersey Repossession, Philadelphia Towing and Recovery, New Jersey Towing and Recovery, Delaware Towing and Recovery. South Jersey Towing and Recovery, Auto Repossession, Truck Repossession, RV Repossession, Vehicle Repossession, Towing, Towing and Recovery, Auto Towing, Truck Towing, RV Towing, Vehicle Towing" />

    <meta name="language" content="English" />
    <meta name="copyright" content="MJ Repo Services" />
    <meta name="robots" content="ALL" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <meta name="robots" content="selection" />
    <meta name="revisit-after" content="7 days" />
    <meta name="document-classification" content="Auto Repossession and Recovery" />
    <meta name="document-rating" content="General" />
    <meta name="document-state" content="Dynamic" />
    <meta name="Abstract" content="MJ Repo Services - Auto Repossession and Recovery." />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.mjreposervices.com" />
    <meta property="og:description" content="MJ Repo Services provides repossession and recovery services for the Philadelphia, New Jersey, and Delaware areas" />

    <link rel="shortcut icon" href="images/favicon.ico"  type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/flexslider/flexslider.css" />
    <link rel="stylesheet" href="css/basic-style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300|Roboto:400,100,300,100italic,400italic,300italic,500italic,500,700,700italic,900,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <!-- JS-->
    <script src="js/libs/modernizr-2.6.2.min.js"></script>
    <!-- end JS-->
  </head>

<body id="home" class="home">

<?php
 
if(isset($_POST['submit'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "mjrepo@comcast.net";
 
    $email_subject = "Online Contact Form";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||

        !isset($_POST['telephone2']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required

    $telephone = $_POST['telephone2']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Telephone: ".clean_string($telephone2)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 

 
 
<div class="wrapper" id="main">  
  <!-- content area -->    
    <section id="content">
      <h1 class="title2" style="text-align: center">Thank you for contacting us. We will be in touch with you very soon.</h1>
        
          
    </section><!-- #end content area -->
</div><!-- #end div #main .wrapper -->






 
<?php
 
}
 
?>
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>
  <script defer src="js/flexslider/jquery.flexslider-min.js"></script>
  <!-- fire ups - read this file!  -->   
  <script src="js/main.js"></script>
  <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
  <script src="js/phone.js"></script>
</body>