<?php

namespace FW\App\Controllers;

use FW\App\Core\Controller;

use FW\App\Core\Validator;

use FW\App\Models\User;

class AuthController extends Controller {
    public function loginIndex() {
        return $this->render('Auth/login');
    }

    public function index() {
        return $this->render('Auth/register');
    }
    
    public function store(Request $request) {
        $registerModel = new User();
    }
}