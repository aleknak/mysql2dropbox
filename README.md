MySQL2Dropbox
==========

PHP script for MySQL DB backups to Dropbox.

## Installation

1. clone project
```sh
sudo yum install php
git clone https://github.com/aleknak/mysql2dropbox.git
```
2. update crontab
```sh
# execute every day at midnight
(crontab -l ; echo "0 0 * * * /usr/bin/php -q /home/user/mysql2dropbox/backup.php >> /dev/null 2>&1") | crontab -
```

Requirements
----------------
* [PHP]
* [DropboxUploader]

[PHP]: http://php.net/
[DropboxUploader]:https://github.com/jakajancar/DropboxUploader
