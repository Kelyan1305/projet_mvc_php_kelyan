
<?php

class Router {
    private $routes = [];

    public function addRoute($path, $controller, $method) {
        $this->routes[$path] = ['controller' => $controller, 'method' => $method];
    }

    public function resolve($path) {
        if (array_key_exists($path, $this->routes)) {
            $route = $this->routes[$path];
            $controller = new $route['controller'];
            return $controller->{$route['method']}();
        }
        // Si aucune route n'est trouvée, renvoyer une erreur 404
        http_response_code(404);
        echo '404 Not Found';
        exit;
    }
}
