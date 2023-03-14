<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
// $radapter->getHTML('^/$', 'home');

$radapter->getHTML('/algo/xd', 'ss');
$radapter->getHTML('/home', 'home');



// $radapter->getHTML('/panel/users', 'home', fn ($DATA, ...$args) => ["userDao" => (new UserDao($DATA['mysqlAdapter']))]);

// $radapter->getHTML('/panel/home', 'home', function ($DATA, ...$args) {
//     $userDao = new UserDao($DATA['mysqlAdapter']);
//     return ["userDao" => $userDao];
// });


// $router->get('/qrcode/{text}/{pass}', function ($text, $pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/qrcode_api.php');
// });