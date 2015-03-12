<?php
$regexp = '/coursesweb/i';
$replacement = 'marplo';
$str = 'Free PHP courses and tutorials: <a href="http://coursesweb.net/php-mysql" title="PHP MySQL">coursesweb.net</a>';

$new_str = preg_replace($regexp, $replacement, $str);

echo $new_str;
?>