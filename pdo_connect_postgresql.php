<?php
try {
  $conn = new PDO("pgsql:host=localhost port=5432 dbname=pdo", "username", "password");
  echo "PDO connection object created";
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>