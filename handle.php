<!DOCTYPE html>
<html class="no-js autoHeight" lang="en">
    <head>
        <meta charset="utf-8">
        <title>About | Sarah V. Gomez Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
 <header>
     <h1 id="contactHeading" class="mainHeading"><a href="index.php"><span>sarahvgomez</span></a>.<a href="contact.php">contact</a></h1>
            <nav id="nav">
                    <button class="nav-icon" id="nav-icon"><span></span></button>
                    <ul>
                      <li><a href="index.php"><i class="material-icons">home</i></a></li>
                      <li><a href="about.php"><i class="material-icons">person</i></a></li>
                      <li><a href="works.php"><i class="material-icons">work</i></a></li>
                      <li><a href="contact.php"><i class="material-icons">email</i></a></li>
                    </ul>
            </nav>
</header>
        <main id="contact">  
        <article>
        <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@sarahvgomez.com";
    $email_subject = "Portfolio Form Submission";
 
    function died($error) {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $subject = $_POST['subject']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$subject)) {
    $error_message .= 'The Subject you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting me. I will be in touch with you very soon.
 
<?php
 
}
// Form Code from https://www.freecontactform.com/email_form.php
?>
        </article>
            <form action="handle.php">
                <div class="personalInfo">
                        <div class="group">
                        <input type="text" id="name" required="required" name="name">
                        <label for="name">Name</label>
                        </div>

                        <div class="group">
                        <input type="text" id="email" required="required" name="email">
                        <label for="email">Email</label>
                        </div>
                </div>
                        <div class="group">
                        <input type="text" id="subject" name="subject" required>
                        <label for="subject">Subject</label>
                        </div>

                        <div class="groupTextarea">
                        <textarea name="message" id="message" required></textarea>
                        <label for="subject">Message</label>
                        </div>
                        <button id="contactButton">Send Message</button>
            </form>

      </main>
<script async defer src="js/main.js"></script> 

</body>
</html>