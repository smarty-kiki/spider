<?php

ini_set('display_errors', 'on');
date_default_timezone_set('Asia/Shanghai');

define('ROOT_DIR', __DIR__);
define('FRAME_DIR', ROOT_DIR.'/frame');
define('DOMAIN_DIR', ROOT_DIR.'/domain');
define('COMMAND_DIR', ROOT_DIR.'/command');
define('CONTROLLER_DIR', ROOT_DIR.'/controller');
define('SPIDER_JOB_DIR', COMMAND_DIR.'/spider_job');

include FRAME_DIR.'/function.php';
include FRAME_DIR.'/entity.php';
include FRAME_DIR.'/otherwise.php';
include FRAME_DIR.'/database/mysql.php';
include FRAME_DIR.'/storage/mongodb.php';
include FRAME_DIR.'/cache/redis.php';
include FRAME_DIR.'/queue/beanstalk.php';
include FRAME_DIR.'/spider/beanstalk.php';
include FRAME_DIR.'/unitofwork.php';
include FRAME_DIR.'/log/file.php';

config_dir(ROOT_DIR.'/config');

include ROOT_DIR.'/util/load.php';
include DOMAIN_DIR.'/load.php';
include SPIDER_JOB_DIR.'/load.php';
