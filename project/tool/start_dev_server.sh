#!/bin/bash

ROOT_DIR="$(cd "$(dirname $0)" && pwd)"/../..

sh $ROOT_DIR/project/tool/dep_build.sh link

sudo docker run --rm -ti -p 80:80 -p 8080:8080 -p 3306:3306 --name spider_frame \
    -v $ROOT_DIR/../frame:/var/www/frame \
    -v $ROOT_DIR/:/var/www/spider_frame \
    -v $ROOT_DIR/project/config/development/nginx/spider_frame.conf:/etc/nginx/sites-enabled/default \
    -v $ROOT_DIR/project/config/development/supervisor/spider_worker.conf:/etc/supervisor/conf.d/spider_worker.conf \
    -v $ROOT_DIR/project/config/development/supervisor/mock_crontab.conf:/etc/supervisor/conf.d/mock_crontab.conf \
    -e 'TIMEZONE=Asia/Shanghai' \
    -e 'AFTER_START_SHELL=/var/www/spider_frame/project/tool/after_dev_env_start.sh' \
kikiyao/debian_php_dev_env start
