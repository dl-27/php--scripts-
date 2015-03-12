<?php
$regexp = '#\<li class="cls"\>(.*?)\</li\>#i';
$html = '<ul>
  <li class="cls">www.marplo.net</li>
  <li class="cls">Courses and tutorials</li>
  <li>www.google.com</li>
  <li class="cls">coursesweb.net</li>
 </ul>';

// get and print the array with all matches
if (preg_match_all($regexp, $html, $matches)) {
  $li_cls = $matches[1];
  print_r($li_cls);
}
else {
  echo 'No match found';
}
?>