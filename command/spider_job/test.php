<?php

spider_job('test', '* * * * *', 'http://127.0.0.1/test', [
    'name'         =>  'n',
    'content.0.asd'  =>  'd.a.b',
]);
