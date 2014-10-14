MySQL2Dropbox
==========

PHP script for MySQL DB backups to Dropbox.

## Installation

```sh
# 1. install PHP
sudo yum install php

# 2 .clone project
git clone https://github.com/aleknak/mysql2dropbox.git

# 3. update crontab
(crontab -l ; echo "0 0 * * * /usr/bin/php -q /home/user/mysql2dropbox/backup.php >> /dev/null 2>&1") | crontab -
```

Requirements
----------------
* [PHP]
* [DropboxUploader]

[PHP]: http://php.net/
[DropboxUploader]:https://github.com/jakajancar/DropboxUploader
