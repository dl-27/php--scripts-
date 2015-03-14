<?php
// Connection data (server_address, database, username, password)
$hostdb = 'localhost';
$namedb = 'dbname';
$userdb = 'username';
$passdb = 'password';

// Display message if successfully connect, otherwise retains and outputs the potential error
try {
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  echo 'Connected to database';
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>