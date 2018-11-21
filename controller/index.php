<?php

if_get('/', function ()
{
    $res = spider_last_data_query('test');
    echo "<pre>";
    var_dump($res);exit;

    return 'hello world';
});

if_get('/test', function () {

    return [
        'name' => 'name1',
        'sex' => 'name2',
        'age' => 'name3',
        'content' => [
            [
                'asd' => 'bcd',
            ],
            [
                'asd' => 'bcd',
            ],
            [
                'asd' => 'bcd',
            ],
            [
                'asd' => 'bcd',
            ],
        ],
        'description' => 'name5',
    ];
});
