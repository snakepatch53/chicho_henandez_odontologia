<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
$radapter->getHTML('/', 'home');

// var_dump($router);

// $router->get('/qrcode/{text}/{pass}', function ($text, $pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/qrcode_api.php');
// });

// $router->get('/contract/{cliente_id}/{pass}', function ($cliente_id, $pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/contract_api.php');
// });

// $router->get('/technical_review/{cliente_id}/{pass}', function ($cliente_id, $pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/technical_review_api.php');
// });

// // POST
// $router->post('/upload_img/{pass}', function ($pass) {
//     include('./src/functions/middleware_auth.php'); //auth
//     include('./src/services/upload_img.php');
// });
