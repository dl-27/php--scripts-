<?php
$regexp = '/href=["|\'](.[^"|\']+)/i';
$url = '<a href="http://coursesweb.net/php-mysql" title="PHP MySQL">coursesweb.net</a>';

if (preg_match($regexp, $url, $matches)) {
  $href = $matches[1];
  echo $href;
}
else {
  echo 'No match found';
}
?>