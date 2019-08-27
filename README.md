# Lando Cron Test

Attempt to test Lando cron setup. Lando file should be self explanatory, however results in the following:

Crontab service:

```
lando ssh -s crontab --user root
/app # tail /var/log/cron/cron.log
crond: crond (busybox 1.30.1) started, log level 0
crond: crond (busybox 1.30.1) started, log level 0
crond: crond (busybox 1.30.1) started, log level 0
crond: wakeup dt=29
crond: wakeup dt=60
crond: wakeup dt=60
/app # tail /var/log/cron/cron.log
crond: crond (busybox 1.30.1) started, log level 0
crond: crond (busybox 1.30.1) started, log level 0
crond: crond (busybox 1.30.1) started, log level 0
crond: wakeup dt=29
crond: wakeup dt=60
crond: wakeup dt=60
crond: wakeup dt=60
crond: wakeup dt=60
/app #
```

Appserver service:

```
lando ssh -s appserver --user root
root@a736773ffe17:/app# tail /var/log/cron/timestamp.log
root@a736773ffe17:/app# tail /var/log/cron/timestamp.log
root@a736773ffe17:/app#
```