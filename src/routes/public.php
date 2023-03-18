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


// * Codigo temporal *ESTE ES UN PARCHE TEMPORAL*
// $radapter->getHTML('/', 'home');
// $radapter->getHTML('/index.php', 'home');


$DATA = [
    "title" => "",
    "name" => "",
    "path" => $_TEMPLATE_PUBLIC_PATH,
    "http_domain" => $_ENV['HTTP_DOMAIN'],
];
$adapter = new MysqlAdapter(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME'],
    $_ENV['DB_PORT']
);

$router->get('/', function () {
    global $DATA;
    $DATA['title'] = 'Home';
    $DATA['name'] = 'home';
    include('./src/templates/public.pages/home.php');
});

$router->get('/inicio', function () {
    global $DATA;
    $DATA['title'] = 'Home';
    $DATA['name'] = 'home';
    include('./src/templates/public.pages/home.php');
});

$router->get('/index.php', function () {
    global $DATA;
    $DATA['title'] = 'Home';
    $DATA['name'] = 'home';
    include('./src/templates/public.pages/home.php');
});
