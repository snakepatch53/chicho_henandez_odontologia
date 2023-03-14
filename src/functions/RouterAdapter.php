<?php
class RAdapter
{
    // constructor
    private $router;
    private String $path;
    private string $http_domain;

    private $attr_name;
    private $attr_callback;
    private $attr_middleware;
    private $atrr_auto_include;
    function __construct($router, string $path, string $http_domain)
    {
        $this->router = $router;
        $this->path = $path;
        $this->http_domain = $http_domain;
    }

    public function getHTML(String $selector, String $name, $callback = null, $middleware = null, bool $auto_include = true)
    {
        $this->attr_name = $name;
        $this->attr_callback = $callback;
        $this->attr_middleware = $middleware;
        $this->atrr_auto_include = $auto_include;

        $this->router->get($selector, function (...$args) {
            $path = $this->path;
            $callback = $this->attr_callback;
            $middleware = $this->attr_middleware;
            $name = $this->attr_name;
            $http_domain = $this->http_domain;
            $auto_include = $this->atrr_auto_include;

            $DATA = [
                "title" => $name,
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
            if ($auto_include) {
                // Comprobar si existe el archivo
                if (file_exists($path . $name . '.php')) {
                    (fn ($DATA, ...$args) => include($path . $name . '.php'))($DATA, ...$args);
                } else {
                    throw new Exception("View name not found: " . $path . $name . '.php');
                }
            }
        });
    }
    public function getRouter()
    {
        return $this->router;
    }
}
