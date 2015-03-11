<?php
$filename = 'files/test.txt';
$new_data = PHP_EOL. 'File handling lesson.';

// opens the file with "ab" mode
if ($fo = fopen($filename, 'ab')) {
  // write the $new_data value
  fwrite($fo, $new_data);

  // close the file and output a message if success
  if (fclose($fo)) echo 'The new data was appended.';
}
else echo 'Unable to create the file.';

// outputs the whole file content
echo '<hr />'. file_get_contents($filename);
?>