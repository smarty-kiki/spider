#!/bin/bash

ROOT_DIR="$(cd "$(dirname $0)" && pwd)"/../../

sh $ROOT_DIR/project/tool/dep_build.sh link

sudo docker run --rm -ti -p 80:80 -p 3306:3306 --name spider \
    -v $ROOT_DIR/../frame:/var/www/frame \
    -v $ROOT_DIR:/var/www/spider \
    -v $ROOT_DIR/project/config/development/nginx/spider.conf:/etc/nginx/sites-enabled/default \
    -v $ROOT_DIR/project/config/development/supervisor/spider_worker.conf:/etc/supervisor/conf.d/spider_worker.conf \
kikiyao/debian_php_dev_env start
