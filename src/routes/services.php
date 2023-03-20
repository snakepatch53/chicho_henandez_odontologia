<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
// $radapter->getHTML('/services/configuration', 'configuration');



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
    "path" => $_TEMPLATE_SERVICES_PATH,
    "http_domain" => $_ENV['HTTP_DOMAIN'],
    "mysqlAdapter" => $adapter
];


$router->post('/services/user/login', function () {
    if (isset(
        $_POST['user_user'],
        $_POST['user_pass']
    )) {
        $result = [
            'status' => 'error',
            'message' => 'Usuario o contraseña incorrectos',
            'response' => false,
            'data' => null
        ];
        global $adapter;
        $userDao = new UserDao($adapter);
        $username = $_POST['user_user'];
        $password = $_POST['user_pass'];
        $user = $userDao->login($username, $password);
        if ($user) {
            if ($user->user_user == $username and $user->user_pass == $password) {
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['user_nombre'] = $user->user_nombre;
                $_SESSION['user_user'] = $user->user_user;
                $_SESSION['user_foto'] = $user->user_foto;
                $_SESSION['user_last'] = $user->user_last;
                $_SESSION['user_created'] = $user->user_created;
                $result['status'] = 'success';
                $result['message'] = 'Bienvenido ' . $user->user_nombre;
                $result['response'] = true;
                $result['data'] = $user;
            }
        }
        echo json_encode($result);
    }
});

$router->get('/services/user/logout', function () {
    session_destroy();
    header('Location: ' . $_ENV['HTTP_DOMAIN'] . '/panel/login');
    exit();
});
