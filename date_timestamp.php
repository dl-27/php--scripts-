<?php
$date = new DateTime();
echo 'Current date/time: '. $date->format('Y-m-d H:i:s');

$date->setTimestamp(1178902725);
echo '<br /> Date time of the 1178902725 timestamp: '. $date->format('Y-m-d H:i:s');
?>