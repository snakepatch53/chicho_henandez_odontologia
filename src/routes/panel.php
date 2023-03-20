<?php
$_TEMPLATE_PANEL_PATH = './src/templates/panel.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PANEL_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
// $radapter->getHTML('/panel/login', 'login');

// $radapter->getHTML('/panel/home', 'home');

// $radapter->getHTML('/panel/users', 'users');




// !PARCHE
$adapter = new MysqlAdapter(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME'],
    $_ENV['DB_PORT']
);

$DATA = [
    "title" => "",
    "name" => "",
    "path" => $_TEMPLATE_PANEL_PATH,
    "http_domain" => $_ENV['HTTP_DOMAIN'],
    "mysqlAdapter" => $adapter
];

$router->get('/panel/login', function () {
    middlewareSessionLogout();
    global $DATA;
    $DATA['title'] = 'Login';
    $DATA['name'] = 'login';
    include('./src/templates/panel.pages/login.php');
});

$router->get('/panel', function () {
    middlewareSessionLogin();
    global $DATA;
    $DATA['title'] = 'Home';
    $DATA['name'] = 'home';
    include('./src/templates/panel.pages/home.php');
});






function middlewareSessionLogin()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . $_ENV['HTTP_DOMAIN'] . 'panel/login');
        exit();
    }
}

function middlewareSessionLogout()
{
    if (isset($_SESSION['user_id'])) {
        header('Location: ' . $_ENV['HTTP_DOMAIN'] . 'panel');
        exit();
    }
}
