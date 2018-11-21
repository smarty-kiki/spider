<?php

command('spider:worker', '启动爬虫 worker', function ()
{
    $config_key = command_paramater('config_key', 'default');
    $memory_limit = command_paramater('memory_limit', 1048576 * 128);

    ini_set('memory_limit', $memory_limit.'b');

    spider_finish_action(function () {
        cache_close();
        db_close();
    });

    spider_watch($config_key, $memory_limit);
});

command('spider:trigger', '爬虫时间触发', function ()
{
    spider_trigger();
});
