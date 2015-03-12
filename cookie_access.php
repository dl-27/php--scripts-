<?php
if (isset($_COOKIE['cookie_name'])) {
  // get and output the value of "cookie_name"
  $cookie_val = $_COOKIE['cookie_name'];
  echo $cookie_val;
}
else {
  echo 'The cookie: cookie_name is not set';
}

// get and output all cookies for the current website
$cookie_all = print_r($_COOKIE, true);
echo $cookie_all;
?>