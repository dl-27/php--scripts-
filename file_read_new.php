<?php
// gets the first 50 bytes of a file into a string
$filename = 'files/test.txt';
if ($fo = fopen($filename, 'r')) {
  $str = fread($fo, filesize($filename));

  echo $str;

  fclose($fo);
}
else echo 'Unable to open the file.';
?>