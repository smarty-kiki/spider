#!/bin/bash

ENV=development php /var/www/spider_frame/public/cli.php migrate:install
ENV=development php /var/www/spider_frame/public/cli.php migrate
