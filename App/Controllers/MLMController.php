<?php

namespace FW\App\Controllers;

use FW\App\Core\Controller;

class MLMController extends Controller {

    public function masterIndex() {
        return $this->render('mlm/master/index');
    }

    public function marketingIndex() {
        return $this->render('mlm/marketing/index');
    }

    public function productionIndex() {
        return $this->render('mlm/production/index');
    }

    public function requestIndex() {
        return $this->render('mlm/production/index');
    }
}