<?php
date_default_timezone_set('Pacific/Auckland');         // set the default timezone: Pacific/Auckland

// output the day of the week, of current time
echo date('l');

// output the month, day and the year, of current time
echo '<br />'. date('F j, Y');

// output the hour, minutes and seconds, of current time
echo '<br />'. date('H:i:s');
?>