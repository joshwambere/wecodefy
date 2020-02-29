<?php

use system\library\Router;

// This is router array, please don't change any key just add values
$routes = [
    [
        'path' => '/',
        'method' => 'GET',
        'folder' => 'site',
        'middleware' => 'web',
        'return' => 'home@welcome',
    ],
    [
        'path' => '/api',
        "children" => [
            [
                'path' => '/',
                'method' => 'GET',
                'folder' => 'api',
                'return' => 'home@welcome',
            ],
        ],

    ]
];
// Init routing
Router::init($routes);
