<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Controllers\EventController;

return [
    'home' => [
        HomeController::class,
        'index'
    ],
    'event' => [
        EventController::class,
        'event'
    ]
];