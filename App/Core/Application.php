<?php

namespace FW\App\Core;

class Application {
	public static string $ROOT_DIR;
	public static Application $app;

	public Controller $controller;
	public Router $router;
	public Request $request;
	public Response $response;

	public function __construct($rootPath) {
		self::$ROOT_DIR = $rootPath.'/app';
		self::$app = $this;

		$this->request = new Request();
		$this->response = new Response();
		$this->router = new Router($this->request, $this->response);
	}

	public function run() {
		echo $this->router->resolve();
	}
}