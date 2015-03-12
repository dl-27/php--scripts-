<?php
// set a new date and time and display it
$date = new DateTime();

// set a new date
$date->setDate(2012, 10, 15);

// set a new time
$date->setTime(12, 32);

echo $date->format('Y-m-d H:i:s');
?>