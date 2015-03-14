<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query
$sql = "SELECT CONCAT(`site`, ' - ', `nr`) AS str FROM `sites`";

// perform the query and store the results
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br />'. $row['str'];
  }
}
else {
  echo '0 results';
}

$conn->close();
?>