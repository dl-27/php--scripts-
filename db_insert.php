<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query for INSERT INTO users (two rows)
$sql = "INSERT INTO `users` (`name`, `pass`, `email`)
 VALUES ('MarPlo', 'peace', 'user@domain.net'),
 ('I_AM', 'love', 'address@domain.net')"; 

// Performs the $sql query on the server to insert the values
if ($conn->query($sql) === TRUE) {
  echo 'users entry saved successfully';
}
else {
 echo 'Error: '. $conn->error;
}

$conn->close();
?>