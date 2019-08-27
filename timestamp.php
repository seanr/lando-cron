<?php
$date = new DateTime("now", new DateTimeZone('America/New_York') );
echo $date->format('Y-m-d h:i:s A') . PHP_EOL;