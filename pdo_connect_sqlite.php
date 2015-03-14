<?php
try {
  // connect to SQLite database
  $conn = new PDO("sqlite:/path/to/database.sdb");
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>