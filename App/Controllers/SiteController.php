<?php 

namespace FW\App\Controllers;

use FW\App\Core\Controller;

class SiteController extends Controller {
    
    public function index() {
        $data = [
            'name' => "Jim the Dog"
        ];
        
        return $this->render('index', $data);
    }

    public function error() {
        return $this->render('error/_404');
    }

    public function twigView() {
        return $this->twig('index');
    }
}