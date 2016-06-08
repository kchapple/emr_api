
# emr_api

TODO
* make id on documents table auto-increment

INSTALLING

Clone repo from:
git@github.com:kchapple/emr_api.git

CD to repository root

cd /opt/gitrepos/emr_api
git pull origin master

If you don't have composer, install composer:
https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx

Run "composer install"
Then "composer update"

Create a vhost in apache
cp /opt/gitrepos/emr_api/* /path/to/cocument/root

Change Database in config/database.php to use OpenEMR credentials

cd to document root
run "php artisan migrate" to apply any database migrations (like those created for AuditEvent records)

REFRESHING

cd /opt/gitrepos/emr_api
git pull origin master
sudo rsync -i --recursive --delete --exclude .git --exclude config/database.php /opt/gitrepos/emr_api/* /path/to/cocument/root