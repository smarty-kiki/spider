<?php

spider_job_get('demo', '* * * * *', 'http://127.0.0.1/target', 'json', [
    'test' => 'a',
    'test3.a' => 'b',
], function ($data) {

    $data['c'] = datetime();

    return $data;
});
