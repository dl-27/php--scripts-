<?php
try {
  $conn = new PDO("OCI:dbname=accounts;charset=UTF-8", "username", "password")
}
catch (PDOException $e) {
  echo $e->getMessage();
}
?>