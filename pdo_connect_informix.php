<?php
try {
  $conn = new PDO("informix:DSN=InformixDB", "username", "password");
}
catch (PDOException $e) {
  echo $e->getMessage();
}
?>