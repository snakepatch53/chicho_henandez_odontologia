<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);


/**
 * ? El error a quedado solucionado
 */
// HOME
$radapter->getHTML('/index.php', 'home', fn () => middlewareSessionLogout(), function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $servicios = (new ServicioDao($DATA['mysqlAdapter']))->selectLimit(4);
    $doctores = (new UserDao($DATA['mysqlAdapter']))->selectDoctoresLimit(2);
    return [
        'info' => $info,
        'slider' => $slider,
        'social' => $social,
        'servicios' => $servicios,
        'doctores' => $doctores
    ];
});

$radapter->getHTML('/', 'home', fn () => middlewareSessionLogout(), function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $servicios = (new ServicioDao($DATA['mysqlAdapter']))->selectLimit(4);
    $doctores = (new UserDao($DATA['mysqlAdapter']))->selectDoctoresLimit(2);
    return [
        'info' => $info,
        'slider' => $slider,
        'social' => $social,
        'servicios' => $servicios,
        'doctores' => $doctores
    ];
});

// CONTACTOS
$radapter->getHTML('/contactos', 'contactos', fn () => middlewareSessionLogout(), function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'social' => $social
    ];
});

// NOSOTROS
$radapter->getHTML('/nosotros', 'nosotros', fn () => middlewareSessionLogout(), function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'social' => $social
    ];
});

// CITAS
$radapter->getHTML('/citas', 'citas', fn () => middlewareSessionLogout(), function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $doctores = (new UserDao($DATA['mysqlAdapter']))->selectDoctores();
    $horas = (new HoraDao($DATA['mysqlAdapter']))->select();
    $servicios = (new ServicioDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'social' => $social,
        'doctores' => $doctores,
        'horas' => $horas,
        'servicios' => $servicios
    ];
});
