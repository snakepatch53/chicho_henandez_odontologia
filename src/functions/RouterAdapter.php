<?php
class RAdapter
{
    // constructor
    private $router;
    private String $path;
    private string $http_domain;
    function __construct($router, string $path, string $http_domain)
    {
        $this->router = $router;
        $this->path = $path;
        $this->http_domain = $http_domain;
    }

    public function getHTML(String $selector, String $name, $callback = null, $middleware = null, bool $auto_include = true)
    {
        $this->router->get($selector, function (...$args) use ($name, $callback, $middleware, $auto_include) {
            $path = $this->path;
            $http_domain = $this->http_domain;
            $DATA = [
                "title" => ucfirst($name),
                "name" => $name,
                "path" => $path,
                "http_domain" => $http_domain,
                "mysqlAdapter" => new MysqlAdapter(
                    $_ENV['DB_HOST'],
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS'],
                    $_ENV['DB_NAME'],
                    $_ENV['DB_PORT']
                ),
            ];

            // Comprobar si se envio un callback
            if ($callback) {
                $callback_respponse = $callback($DATA, ...$args);
                // Comprobar si el callback devuelve un array para unirlo al array DATA
                if (is_array($callback_respponse)) $DATA = array_merge($DATA, $callback_respponse);
            }

            // Comprobar si se envio un middleware
            if ($middleware) {
                $middleware_respponse = $middleware($DATA, ...$args);
                // Comprobar si el middleware devuelve un array para unirlo al array DATA
                if (is_array($middleware_respponse)) $DATA = array_merge($DATA, $middleware_respponse);
            }
            // Comprobar si se envio quiere que se incluya un archivo con el mismo nombre que el nombre de la vista
            if ($auto_include == true) {
                // Comprobar si existe el archivo
                if (file_exists($path . $name . '.php')) {
                    (fn ($DATA, ...$args) => include($path . $name . '.php'))($DATA, ...$args);
                } else {
                    throw new Exception("View name not found: " . $path . $name . '.php');
                }
            }
        });
    }
    public function post(String $selector, $callback = null, $middleware = null)
    {
        $this->router->post($selector, function (...$args) use ($callback, $middleware) {
            $path = $this->path;
            $http_domain = $this->http_domain;
            $DATA = [
                "path" => $path,
                "http_domain" => $http_domain,
                "mysqlAdapter" => new MysqlAdapter(
                    $_ENV['DB_HOST'],
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS'],
                    $_ENV['DB_NAME'],
                    $_ENV['DB_PORT']
                ),
            ];

            // Comprobar si se envio un callback
            if ($callback) {
                $callback_respponse = $callback($DATA, ...$args);
                // Comprobar si el callback devuelve un array para unirlo al array DATA
                if (is_array($callback_respponse)) $DATA = array_merge($DATA, $callback_respponse);
            }

            // Comprobar si se envio un middleware
            if ($middleware) {
                $middleware_respponse = $middleware($DATA, ...$args);
                // Comprobar si el middleware devuelve un array para unirlo al array DATA
                if (is_array($middleware_respponse)) $DATA = array_merge($DATA, $middleware_respponse);
            }
        });
    }
    public function getRouter()
    {
        return $this->router;
    }
}
