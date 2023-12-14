 

<?php
 
if(isset($_POST['email'])) {
 
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@gulmoharboutique.com";
 
    $email_subject = "Contact Form Submission";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
 
        echo "<strong><p>The following items are not specified correctly.</p></strong><br />";
 
        echo $error."<br /><br />";
 
        echo "<p>Return to the form and try again.</p><br />";
		echo "<p><a href='index.php'>return to the homepage</a></p>";
        die();
		
 
    }
  
 
    $name = $_POST['name']; // required
 
    
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['phone']; // not required
 
    $comments = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<li><p>The completed e-mail address appears to be incorrect<p></li>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= '<li><p>First name appears to be wrong</p></li>';
 
  }
 
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= '<li><p>Message appears to be incorrect</p></li>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
    $email_message .= "First Name: ".clean_string($name)."\n";
 
   
 
    $email_message .= "Email Adress: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
      
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 

 
<!-- include your own success html here -->
 
 
 <div  style="position:relative; height:100vh">
     <div style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%);
 margin:auto; max-width:350px; text-align:center; border:1px solid #d2d2d2; padding:20px;">
<h1>Thank you for your message!</h1> <h2>We will contact you as soon as possible.</h1>
<h2 style="font-size:18px; color:#f83538">Contact : +91 9874196677</h2>
<a href="https://gulmoharboutique.com/" style="color:#0673b2; font-size:15px">Continue To site</a>
</div>
</div>
 
 
 
<?php
 
}
 
?>

*/