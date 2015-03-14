<?php
// connect to the server
$conn = new mysqli('localhost', 'root', 'pass', 'dbname');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// some code

$conn->close();         // close the connection

// other PHP code
?>
