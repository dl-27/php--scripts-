<?php
// connect to the MySQL server
$conn = new mysqli('localhost', 'root', 'pass', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query for CREATE TABLE
$sql = "CREATE TABLE `users` (
 `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 `name` VARCHAR(25) NOT NULL,
 `pass` VARCHAR(18) NOT NULL,
 `email` VARCHAR(45),
 `reg_date` TIMESTAMP
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 

// Performs the $sql query on the server to create the table
if ($conn->query($sql) === TRUE) {
  echo 'Table "users" successfully created';
}
else {
 echo 'Error: '. $conn->error;
}

$conn->close();
?>