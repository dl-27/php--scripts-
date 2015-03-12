<?php
$regexp = '/^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/';         // an e-mail address pattern
$email = 'some_name789@emailserver.net';             // the e-mail address

if (preg_match($regexp, $email)) {
  echo 'Correct email address';
}
else {
  echo 'Incorrect email address';
}
?>