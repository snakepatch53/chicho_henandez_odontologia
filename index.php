<?php
//show errors
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// definimos la zona horaria
date_default_timezone_set('America/Guayaquil');
// cargamos el autoload de composer
require_once __DIR__ . '/vendor/autoload.php';

// cargamos las funciones
require_once __DIR__ . '/src/functions/router.adapter.php';

// cargamos las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// creamos el router
$router = new \Bramus\Router\Router();

// declaramos las rutas
require __DIR__ . '/src/routes/services.php';
require __DIR__ . '/src/routes/public.php';
require __DIR__ . '/src/routes/panel.php';

// iniciamos el router
$router->run();
