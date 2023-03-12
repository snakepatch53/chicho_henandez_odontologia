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
    function __construct($router, string $path, string $http_domain)
    {
        $this->router = $router;
        $this->path = $path;
        $this->http_domain = $http_domain;
    }

    public function getHTML(String $selector, String $name, $callback = null, $middleware = null)
    {
        $this->attr_name = $name;
        $this->attr_callback = $callback;
        $this->attr_middleware = $middleware;

        $this->router->get($selector, function (...$args) {
            $path = $this->path;
            $callback = $this->attr_callback;
            $middleware = $this->attr_middleware;
            $name = $this->attr_name;
            $http_domain = $this->http_domain;

            $DATA = [
                "title" => $name,
                "name" => $name,
                "path" => $path,
                "http_domain" => $http_domain,
            ];

            if ($callback) $callback($DATA, ...$args);
            if ($middleware) $middleware($DATA, ...$args);
            if ($callback || $middleware) return;

            if (file_exists($path . $name . '.php')) {
                (fn ($DATA, ...$args) => include($path . $name . '.php'))($DATA, ...$args);
            } else {
                throw new Exception("View name not found: " . $path . $name . '.php');
            }
        });
    }
    public function getRouter()
    {
        return $this->router;
    }
}
