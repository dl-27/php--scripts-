<?php
$filename = 'files/test.txt';

// opens the file
if ($fo = fopen($filename, 'r')) {
  $line = fgets($fo);          // read the first line

  // gets and outputs the position of the file pointer
  echo 'The pointer position after read the first line is: '. ftell($fo);

  rewind($fo);                // pointer moved back to beginning

  // move the internal pointer to 30 bytes from the beginning
  fseek($fo, 30, SEEK_SET);

  // outputs the next 10 characters
  echo '<br />'. fread($fo, 10);
  
  // outputs the new position of the file pointer
  echo '<br /> The new position of the file pointer is: '. ftell($fo);

  fclose($fo);
}
else echo 'Unable to open the file.';
?>