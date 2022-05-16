<?php

//подключаем класс Контрактор
require __DIR__ . '/../Contractors/Models/Articles/Contractor.php';

//автозагрузка новых классов, - оставляем???
//spl_autoload_register(function (string $className) {
//    require_once __DIR__ . '/../Contractors/' . str_replace
//        ('\\', '/', $className) . '.php';
//});

$article = new \Contractors\Models\Articles\Contractor
(
    'CompanyName',
    'CEO',
    'Contact',
    'Activity',
    'Region'
);
var_dump($article);

//контроллер
require __DIR__ . '/../Contractors/Controllers/MainController.php';
$controller = new \Contractors\Controllers\MainController();
$controller->main();

//роутер //выводит 2 моих таблички
spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/../Contractors/' . str_replace('\\', '/', $className) . '.php';
});

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../Contractors/routes.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo 'Страница не найдена!';
    return;
}

unset($matches[0]);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);

