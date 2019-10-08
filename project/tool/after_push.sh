#!/bin/bash

ROOT_DIR="$(cd "$(dirname $0)" && pwd)"/../..

ln -fs $ROOT_DIR/project/config/production/nginx/spider_frame.conf /etc/nginx/sites-enabled/spider_frame
/usr/sbin/service nginx reload

/bin/bash $ROOT_DIR/project/tool/dep_build.sh link
/usr/bin/php $ROOT_DIR/public/cli.php migrate:install
/usr/bin/php $ROOT_DIR/public/cli.php migrate

ln -fs $ROOT_DIR/project/config/production/supervisor/spider_worker.conf /etc/supervisor/conf.d/spider_worker.conf
/usr/bin/supervisorctl update
/usr/bin/supervisorctl restart spider_worker:*
