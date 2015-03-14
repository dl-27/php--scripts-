<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', 'pass', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// UPDATE sql query
$sql = "UPDATE `users` SET `email`='new_mail@domain.net' WHERE `name`='MarPlo' AND `id`=2";

// perform the query and check for errors
if (!$conn->query($sql)) {
  echo 'Error: '. $conn->error;
}

$conn->close();
?>