<?php

namespace FW\App\Routes;

use FW\App\Controllers\AuthController;
use FW\App\Controllers\SiteController;
use FW\App\Controllers\MLMController;

// Routes created for testing purposes
// Tests the ability to define a function inside the Router

$app->router->get('/phpinfo', function() {
    return phpinfo();
});

$app->router->get('/sqltest', function() {
    error_reporting(E_ALL );
    ini_set('display_errors', 'On');

    $serverName = "10.23.10.4";
    $uid = "app_DCS_dev";
    $pwd = "r5Gustes3esTepruwR27ratHad8fu4he";
    $connectionInfo = array( "UID" => $uid, "PWD" => $pwd, "Database"=>"DCS_Release");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    sqlsrv_connect($serverName);

    if($conn) {
        echo "Connection Established.";
    }
    else {
        echo "Connection Error!!!";
    }

    sqlsrv_close($conn);
});

$app->router->get('/twig', [SiteController::class, 'twigView']);

// Auth Routes
$app->router->get('/', [SiteController::class, 'index']);
$app->router->get('/login', [AuthController::class, 'loginIndex']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'index']);
$app->router->post('/register', [AuthController::class, 'store']);

// MLM Routes
$app->router->get('/mlm/master', [MLMController::class, 'masterIndex']);
$app->router->get('/mlm/marketing', [MLMController::class, 'marketingIndex']);
$app->router->get('/mlm/production', [MLMController::class, 'productionIndex']);
$app->router->get('/mlm/request', [MLMController::class, 'requestIndex']);