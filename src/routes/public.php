<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);


/**
 * ! Error no sintactico con el adaptador de rutas
 * TODO: Solucionar este problema para seguir con el desarrollo
 * ? Por ahora solo usar el router normal para desarrollar las interfaces
 */
// HOME
// $radapter->getHTML('^/$', 'home');

// $radapter->getHTML('/algo/xd', 'ss');
// $radapter->getHTML('/home', 'home');



// $radapter->getHTML('/panel/users', 'home', fn ($DATA, ...$args) => ["userDao" => (new UserDao($DATA['mysqlAdapter']))]);

// $radapter->getHTML('/panel/home', 'home', function ($DATA, ...$args) {
//     $userDao = new UserDao($DATA['mysqlAdapter']);
//     return ["userDao" => $userDao];
// });


// * Codigo temporal
$radapter->getHTML('/', 'home');
$radapter->getHTML('/index.php', 'home');
// $router->get('/qrcode/{text}/{pass}', function ($text, $pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/qrcode_api.php');
// });
