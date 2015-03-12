<?php
$regexp = '/courses/i';                    // the pattern
$str = 'Free Courses and tutorials';       // the subject string

if (preg_match($regexp, $str)) {
  echo 'A match was found';
}
else {
  echo 'No match';
}
?>