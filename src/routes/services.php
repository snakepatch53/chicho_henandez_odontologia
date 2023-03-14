<?php
$_TEMPLATE_PUBLIC_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
// $radapter->getHTML('/services/configuration', 'configuration');
