<?php
set_time_limit(0); // make it run forever
while(true) {
  $exe=shell_exec('/usr/local/bin/php /app/timestamp.php >> /var/log/cron/timestamp.log');
  sleep(60);
}
