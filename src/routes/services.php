<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/services/configuration', 'configuration');

// USER
$radapter->post('/services/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/services/user/logout', fn () => UserService::logout());
$radapter->post('/services/user/select', fn (...$args) => UserService::select(...$args));
$radapter->post('/services/user/insert', fn (...$args) => UserService::insert(...$args));
$radapter->post('/services/user/update', fn (...$args) => UserService::update(...$args));
$radapter->post('/services/user/delete', fn (...$args) => UserService::delete(...$args));

// SERVICIOS
$radapter->post('/services/servicio/select', fn (...$args) => ServicioService::select(...$args));
$radapter->post('/services/servicio/insert', fn (...$args) => ServicioService::insert(...$args));
$radapter->post('/services/servicio/update', fn (...$args) => ServicioService::update(...$args));
$radapter->post('/services/servicio/delete', fn (...$args) => ServicioService::delete(...$args));


// HORAS
$radapter->post('/services/hora/select', fn (...$args) => HoraService::select(...$args));
$radapter->post('/services/hora/insert', fn (...$args) => HoraService::insert(...$args));
$radapter->post('/services/hora/update', fn (...$args) => HoraService::update(...$args));
$radapter->post('/services/hora/delete', fn (...$args) => HoraService::delete(...$args));


// SLIDER
$radapter->post('/services/slider/select', fn (...$args) => SliderService::select(...$args));
$radapter->post('/services/slider/insert', fn (...$args) => SliderService::insert(...$args));
$radapter->post('/services/slider/update', fn (...$args) => SliderService::update(...$args));
$radapter->post('/services/slider/delete', fn (...$args) => SliderService::delete(...$args));
