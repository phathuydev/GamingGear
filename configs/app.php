<?php
$config['app'] = [
    'service' => [
        HtmlHelper::class
    ],
    'routeMiddleware' => [
        'product' => AuthMiddleware::class
    ],
    'globalMiddleware' => [
        ParamsMiddleware::class
    ],
    'boot' => [
         AppServiceProvider::class
    ]
];
