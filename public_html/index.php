<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Modo mantenimiento
if (file_exists($maintenance = __DIR__.'/../501Laravel/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload de Composer
require __DIR__.'/../501Laravel/vendor/autoload.php';

// Bootstrap de Laravel
/** @var Application $app */
$app = require_once __DIR__.'/../501Laravel/bootstrap/app.php';

// Manejar la petición
$app->handleRequest(Request::capture());
//hola alan del futuro
