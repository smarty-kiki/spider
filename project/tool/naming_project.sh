#!/bin/bash

sed_name()
{
    cat $1 | sed -e "s/spider_frame/$2/g" > $1.new && mv $1.new $1
}

if [ ! -n "$1" ] ;then
    echo "Usage: $0 <name>"
    exit
fi

ROOT_DIR="$(cd "$(dirname $0)" && pwd)"/../../

mv $ROOT_DIR/project/config/development/nginx/spider_frame.conf $ROOT_DIR/project/config/development/nginx/$1.conf
mv $ROOT_DIR/project/config/production/nginx/spider_frame.conf $ROOT_DIR/project/config/production/nginx/$1.conf

sed_name $ROOT_DIR/project/config/development/nginx/$1.conf $1
sed_name $ROOT_DIR/project/config/development/supervisor/spider_worker.conf $1
sed_name $ROOT_DIR/project/config/production/nginx/$1.conf $1
sed_name $ROOT_DIR/project/config/production/supervisor/spider_worker.conf $1
sed_name $ROOT_DIR/project/tool/start_dev_server.sh $1
sed_name $ROOT_DIR/project/tool/after_dev_env_start.sh $1
sed_name $ROOT_DIR/project/tool/after_push.sh $1
