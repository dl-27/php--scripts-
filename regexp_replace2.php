<?php
// first replace 7 with 9, then 10 or 15 with 7
$regexp = array('/7/', '/(10|15)/');          // array with patterns
$replacements = array('9', '7');              // array with replacements
$data = '1976-10-15';

$new_data = preg_replace($regexp, $replacements, $data);

echo $new_data;
?>