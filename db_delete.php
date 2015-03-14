<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', 'pass', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// DELETE sql query
$sql = "DELETE FROM `users` WHERE `name`='MarPlo'";

// perform the query and check for errors
if (!$conn->query($sql)) {
  echo 'Error: '. $conn->error;
}

$conn->close();
?>