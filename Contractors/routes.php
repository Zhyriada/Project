<?php
return [
    '~^hello/(.*)$~' => [\Contractors\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\Contractors\Controllers\MainController::class, 'main'],
];