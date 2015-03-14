<?php
$to = 'your_email@domain.com';          // receiver address

$erors = array();                      // set an empty array that will contains the errors
$regexp_mail = '/^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/';         // an e-mail address pattern

// Check for form submission
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  // remove tags and whitespace from the beginning and end of form data
  $_POST = array_map("strip_tags", $_POST);
  $_POST = array_map("trim", $_POST);

  // chech if all form fields are filled in correctly
  // (email address and the minimum number of characters in "subject" and "message")
  if (!preg_match($regexp_mail, $_POST['email'])) $erors[] = 'Invalid e-mail address';
  if (strlen($_POST['subject'])<3) $erors[] = 'Subject must contain minimum 3 characters';
  if (strlen($_POST['message'])<5) $erors[] = 'Subject must contain minimum 5 characters';

  // if no errors ($error array empty)
  if(count($erors)<1) {
    // get form data
    $from = 'From: '. $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    $body = wordwrap($body, 70);           // makes the body no longer than 70 characters long

    // set headers (From, Encoding utf-8 and Reply-to)
    $headers = $from. "\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $headers .= "Reply-To: ". $_POST['email'];

    // send the email
    if (mail($to, $subject, $body, $headers)) echo 'Thank you for using our mail form';
    else echo 'Error, the message can not be sent';
  }
  else {
    // else, if errors, it adds them in string format and print it
    echo implode('<br />', $erors);
  }
}
?>

<form action="" method="post">
 E-mail: <input type="text" name="email" /><br />
 Subject: <input type="text" name="subject" /><br />
 Message:<br />
 <textarea name="message" rows="8" cols="30"></textarea><br />
 <input type="submit" value="Send" />
</form>