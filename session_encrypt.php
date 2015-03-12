<?php
session_start();

$data = 'php-mysql';

// encrypt $data and store it in a session
$hash_data = sha1($data);
$_SESSION['pass'] = $hash_data;

$pass = 'php-mysql';            // this could be a password sent by a user

// check if we have a valid $pass
if ($_SESSION['pass']==sha1($pass)) {
  echo 'Correct pass, its encrypted value is: '. $_SESSION['pass'];
}
else {
  echo 'Incorrect pass';
}
?>