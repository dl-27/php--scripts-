<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

$name = 'Marplo';            // sets the name in a variable

// SELECT sql query
$sql = "SELECT `id`, `email` FROM `users` WHERE `name`='$name'"; 
#sql = "SELECT * FROM `table_name` WHERE `name` LIKE 'mar%'";
#sql = "SELECT * FROM `table_name` WHERE `name` NOT LIKE '%mar'";
#sql = "SELECT * FROM `table_name` WHERE `name` NOT LIKE 'mar%'";
#sql = "SELECT * FROM `table_name` WHERE `name` LIKE 'mar_'";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br /> id: '. $row['id']. ' - email: '. $row['email'];
  }
}
else {
  echo '0 results';
}

$conn->close();
?>