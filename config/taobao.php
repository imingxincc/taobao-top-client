<?php

return [
    'default' => 'app',

    'connections' => [
        'app' => [
            'app_key' => env('TAOBAO_APP_KEY', 'appKey'),
            'app_secret' => env('TAOBAO_APP_SECRET', 'appSecret'),
            'format' => 'json'
        ]
    ]
];