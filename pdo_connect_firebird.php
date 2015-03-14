<?php
try {
  $conn = new PDO("firebird:dbname=localhost:C:\Programs\Firebird\DATABASE.FDB", "SYSDBA", "masterkey");
}   
catch (PDOException $e) {
  echo $e->getMessage();
}
?>