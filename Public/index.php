<?php 

use FW\App\Core\Application;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

require_once __DIR__.'/../App/Routes.php';

$app->run();