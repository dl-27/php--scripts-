<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', 'pass', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query for INSERT INTO users
$sql = "INSERT INTO `users` (`name`, `pass`, `email`)
 VALUES ('PloMar ', 'love_light', 'a_name@domain.net')"; 

// Performs the $sql query and get the auto ID
if ($conn->query($sql) === TRUE) {
  echo 'The auto ID is: '. $conn->insert_id;
}
else {
 echo 'Error: '. $conn->error;
}

$conn->close();
?>