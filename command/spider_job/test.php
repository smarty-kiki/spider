<?php

spider_job_get('test', '* * * * *', 'http://127.0.0.1/test', 'json', [
    'test' => 'a',
    'test3.a' => 'b',
]);
