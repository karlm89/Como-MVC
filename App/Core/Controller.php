<?php

namespace FW\App\Core;

class Controller {
    public function render($view, $params = []) {

        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include_once Application::$ROOT_DIR."/views/$view.php";

        return ob_get_clean();
    }

    public function twig($view, $params = []){
        // Left for incase I need it for something later.

        $loader = new \Twig\Loader\FilesystemLoader(Application::$ROOT_DIR.'/Views');
        $cache = Application::$ROOT_DIR.'/Cache/Twig';

        // TODO after env is set up, set up a check for DEV / Prod -- If dev it should hit this endpoint. 
        // If prod should cache should be set to $cache.
        
        $twig = new \Twig\Environment($loader, [
            'cache' => false,
        ]);

        return $twig->render($view.'.twig', $params);
    }
}