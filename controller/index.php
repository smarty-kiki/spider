<?php

if_get('/', function ()
{
    return 'hello world';
});

if_get('/show_result', function ()
{
    return spider_data_query('demo');
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
