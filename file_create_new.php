<?php
$filename = 'files/test.txt';
$str = 'Free PHP course and tutorials.'. PHP_EOL. 'Web site: http://coursesweb.net';

// opens the file with "xb" mode
if ($fo = fopen($filename, 'xb')) {
  // write the $str value
  fwrite($fo, $str);

  // close the file and output a message if success
  if (fclose($fo)) echo 'The file was created';
}
else echo 'Unable to create the file.';
?>