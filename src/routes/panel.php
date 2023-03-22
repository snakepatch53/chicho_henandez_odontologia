<?php
$_TEMPLATE_PANEL_PATH = './src/templates/panel.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PANEL_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
$radapter->getHTML('/panel/login', 'login', fn () => middlewareSessionLogout());

$radapter->getHTML('/panel', 'home', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// INFO
$radapter->getHTML('/panel/info', 'info', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// $radapter->getHTML('/panel/users', 'users');
