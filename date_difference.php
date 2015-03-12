<?php
// set an object with the current date
$dateNow = new DateTime();
$now = $dateNow->format("Y-m-d H:i");           // store the currend date

// the second date
$date2 = new DateTime('1996-07-07 14:45:00');

// apply the diff() method, getting a DateInterval object ($diDiff)
$diDiff = $dateNow->diff($date2) ;

echo 'The difference between: '. $now. ' and "1996-07-07 14:45" is: '. $diDiff->format('%y year, %m months, %d days, %h hours, and %i minutes.');
?>
