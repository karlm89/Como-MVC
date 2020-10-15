<?php 

namespace FW\App\Core;

use FW\App\Core\Request;

class Router {

    public Request $request;
    public Response $response; 

    protected array $routes = [];
     
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->method(); 
        $callback = $this->routes[$method][$path] ?? false; 

        if($callback === false) {
            $this->response->setStatusCode(404);
            return Application::$app->controller->render('Error/_404');
        }
        
        if(is_string($callback)) {
            return Application::$app->controller->render($callback);
        }

        if(is_array($callback)) {
            /**
             * @var $controller \app\core\Controller
             */
            $controller = new $callback[0];
            $controller->action = $callback[1];
            Application::$app->controller = $controller;

            // $middlewares = $controller->getMiddlewares();
            // foreach ($middlewares as $middleware) {
            //     $middleware->execute();
            // }

            $callback[0] = $controller;
        }

        return call_user_func($callback, $this->request); 
    }
}