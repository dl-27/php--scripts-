<?php
$dir = './files';

// read the dir-content with scandir()
$ar_dir = scandir($dir);
var_export($ar_dir);

echo '<h5>Using readdir()</h5>';

// read the dir-content with readdir()
if ($dc = @opendir($dir)) {
  while($ok = readdir($dc)) {
    echo '<br />'. $ok;
  }
  closedir($dc);
}
else echo 'Unable to open the directory';
?>