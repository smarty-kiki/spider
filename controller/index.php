<?php

if_get('/', function ()
{
    return 'hello world';
});

if_get('/show_result', function ()
{
    return spider_data_query('demo');
});

if_get('/show_result2', function ()
{
    return spider_data_query('demo2');
});

if_get('/target', function ()
{
    return [
        'test' => 'haha',
        'test2' => 'haha',
        'test3' => [
            'a' => 'haha'
        ],
    ];
});

if_get('/target2', function ()
{
    return [
        'data' => [
            ['id' => datetime('now',        'Y-m-d H:i'), 'col' => rand()],
            ['id' => datetime('-1 minutes', 'Y-m-d H:i'), 'col' => rand()],
            ['id' => datetime('-2 minutes', 'Y-m-d H:i'), 'col' => rand()],
            ['id' => datetime('-3 minutes', 'Y-m-d H:i'), 'col' => rand()],
        ],
    ];
});
