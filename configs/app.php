<?php
$config['app'] = [
    'service' => [
        HtmlHelper::class
    ],
    'routeMiddleware' => [
        'gg-admin' => AuthMiddleware::class
    ],
    'globalMiddleware' => [
        ParamsMiddleware::class
    ],
    'boot' => [
         AppServiceProvider::class
    ]
];
