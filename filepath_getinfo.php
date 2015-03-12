<?php
$path = 'files/php-mysql/file_system.php';
$ar_path = pathinfo($path);
var_export($ar_path);

echo '<hr />';

// or, using directly dirname() and basename() function
echo '<br /> dirname() returns - '. dirname($path);
echo '<br /> basename() returns - '. basename($path);
?>