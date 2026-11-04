echo "install /x1/var_lib_phpBB/com${1} in /x1/var_www/${2}/forum"

if [[ ! -d "/x1/var_www/${2}/forum" || ! -d "/x1/var_lib_phpBB/com${1}" ]]; then
    echo "Error: Required directory does not exist"
    exit 1
fi

cd /x1/var_www/${2}/forum

rsync -av --delete "/x1/var_lib_phpBB/com${1}/install/" install/

install "/x1/var_lib_phpBB/com${1}/app.php" app.php
install "/x1/var_lib_phpBB/com${1}/common.php" common.php
install "/x1/var_lib_phpBB/com${1}/cron.php" cron.php
install "/x1/var_lib_phpBB/com${1}/faq.php" faq.php
install "/x1/var_lib_phpBB/com${1}/feed.php" feed.php
install "/x1/var_lib_phpBB/com${1}/index.php" index.php
install "/x1/var_lib_phpBB/com${1}/mcp.php" mcp.php
install "/x1/var_lib_phpBB/com${1}/memberlist.php" memberlist.php
install "/x1/var_lib_phpBB/com${1}/posting.php" posting.php
install "/x1/var_lib_phpBB/com${1}/rediredtToForum.php" rediredtToForum.php
install "/x1/var_lib_phpBB/com${1}/report.php" report.php
install "/x1/var_lib_phpBB/com${1}/search.php" search.php
install "/x1/var_lib_phpBB/com${1}/ucp.php" ucp.php
install "/x1/var_lib_phpBB/com${1}/viewforum.php" viewforum.php
install "/x1/var_lib_phpBB/com${1}/viewonline.php" viewonline.php
install "/x1/var_lib_phpBB/com${1}/viewtopic.php" viewtopic.php
install "/x1/var_lib_phpBB/com${1}/composer.json" composer.json
install "/x1/var_lib_phpBB/com${1}/composer.lock" composer.lock

rsync -av --delete "/x1/var_lib_phpBB/com${1}/adm/" adm/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/assets/" assets/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/bin/" bin/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/config/" config/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/docs/" docs/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/download/" download/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/ext/" ext/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/images/" images/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/includes/" includes/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/language/" language/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/phpbb/" phpbb/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/styles/" styles/
rsync -av --delete "/x1/var_lib_phpBB/com${1}/vendor/" vendor/

chown -R www-data:www-data *

php bin/phpbbcli.php cache:purge
php bin/phpbbcli.php --safe-mode db:migrate
php bin/phpbbcli.php --safe-mode fixup:fix-left-right-ids
php bin/phpbbcli.php cache:purge

rm -rf install

