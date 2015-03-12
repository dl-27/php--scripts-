<?php
// get timestamp of October 15, 1976, 20:38:00 (with mktime)
// output the timestamp and the day of the week of this date
$stamp = mktime(20, 38, 0, 10, 15, 1976);
echo 'Timestamp: '. $stamp;
echo '<br /> October 15, 1976 is a '. date('l', $stamp);

// Example with strtotime()
echo '<br /><br />Example with strtotime():<br />';

echo '<br /> 15 October 1976, 20:38:00 - '. strtotime('15 October 1976, 20:38:00');
echo '<br /> 07 July 1996 - '. strtotime('07 July 1996');
echo '<br /> +3 days - '. strtotime('+3 days');
echo '<br /> +1 one week - '. strtotime('+1 week');
echo '<br /> +1 week 2 days 3 hours 30 seconds - '. strtotime('+1 week 2 days 3 hours 30 seconds');
echo '<br /> next Sunday - '. strtotime('next Sunday');
?>