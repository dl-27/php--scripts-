<?php
$filename = 'files/test.txt';
if ($fo = fopen($filename, 'r')) {
  // output the content line by line
  while(!feof($fo)) {
    echo fgets($fo). '<br />';
  }

  fclose($fo);
}
else echo 'Unable to open the file.';
?>