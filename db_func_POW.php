<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query
$sql = "SELECT `nr`, POW(`nr`, 3) AS pow3 FROM `sites` ORDER BY pow3";

// perform the query and store the results
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br /> POW('. $row['nr']. ', 3) - '. $row['pow3'];
  }
}
else {
  echo '0 results';
}

$conn->close();
?>