<?php
// get and output the current date/time
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');              // 2011-03-21 14:08:00

// output the day of the week of a specified date
$date = new DateTime('15-10-2012');          // can also be used: "15-October-2012", "2012-Oct-15"
echo '<br /> 15-10-2012 ia a '. $date->format('l');              // 15-10-2012 ia a Monday
?>