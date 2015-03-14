// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query
$sql = "SELECT `site` AS st FROM `sites`";

// perform the query and store the results
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br />';
    print_r($row);
  }
}
else {
  echo '0 results';
}

$conn->close();
?>