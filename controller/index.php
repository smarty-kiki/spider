<?php

if_get('/', function ()
{
    return 'hello world';
});

if_get('/test', function () {
    return [
        'test' => 'haha',
        'test2' => 'haha',
        'test3' => [
            'a' => 'haha'
        ],
    ];
});
