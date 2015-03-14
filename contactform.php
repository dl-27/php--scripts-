<?php
$to = 'your_email@domain.com';          // receiver address

// Check for form submission
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  // get form data
  $from = 'From: '. $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['message'];
  $body = wordwrap($body, 70);           // makes the body no longer than 70 characters long

  // send the email
  if (mail($to, $subject, $body, $from)) echo 'Thank you for using our mail form';
  else echo 'Error, the message can not be sent';
}
?>

<form action="" method="post">
 E-mail: <input type="text" name="email" /><br />
 Subject: <input type="text" name="subject" /><br />
 Message:<br />
 <textarea name="message" rows="8" cols="30"></textarea><br />
 <input type="submit" value="Send" />
</form>