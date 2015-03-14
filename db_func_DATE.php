<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query
$sql = "SELECT `id`, `site`, DAYNAME(`reg_date`) AS weekday FROM `sites` ORDER BY `reg_date` DESC LIMIT 1";

// perform the query and store the results
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo 'The last web site: '. $row['site']. ' , id: '. $row['id']. ' - was registered in a '. $row['weekday'];
  }
}
else {
  echo '0 results';
}

$conn->close();
?>