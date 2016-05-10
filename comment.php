<?php
 
    $email_to = "info@modernsummer.com";
    $email_subject = "Email from form on Modern Summer";
 
    $email_from = $_POST['email_address']; // required
    $location = $_POST['location']; // required
    $question = $_POST['question_text']; // required
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Email Address: ".clean_string($email_from)."\n";
    $email_message .= "Location: ".clean_string($location)."\n";
    $email_message .= "Question: ".clean_string($question)."\n";
 
    $headers = 'From: '.$email_from."\r\n";
    $headers .= 'Reply-To: '.$email_from."\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
 
    @mail($email_to, $email_subject, $email_message, $headers); 
 
?>