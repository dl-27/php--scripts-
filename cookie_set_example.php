<?php
$value = 'I AM';
$one_hour = 3600;
$one_week = 60*60*24*7;

setcookie("cookie_name1", $value);                               // expire when the browser closes
setcookie("cookie_name2", $value, time()+$one_hour);             // expire in 1 hour
setcookie("cookie_name3", $value, time()+$one_week, "/");        // expire in 1 hour (available within the entire web site)
?>

//<html>
//...