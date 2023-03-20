<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);


/**
 * ? El error a quedado solucionado
 */
// HOME
$radapter->getHTML('/', 'home', fn () => middlewareSessionLogout());
$radapter->getHTML('/contactos', 'contactos', fn () => middlewareSessionLogout());
$radapter->getHTML('/nosotros', 'nosotros', fn () => middlewareSessionLogout());
$radapter->getHTML('/citas', 'citas', fn () => middlewareSessionLogout());
