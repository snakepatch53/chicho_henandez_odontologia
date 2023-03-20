<?php
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
