<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "controllers/registrerController.php";
require_once "controllers/userController.php";



$registrerController = new RegistrerController();
$userController = new UserController();


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


$params = explode('/', $action);


switch ($params[0]) {

    case 'home':
        $registrerController->renderHome();
        break;
    case 'ventas':
        $registrerController->renderVentas();
        break;
    case 'agregarVenta':
        $registrerController->agregarVenta();
        $registrerController->renderVentas();
        break;
    case 'login':
        $registrerController->renderLogin();
        break;
    case 'loguear':
        $userController->loguear();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'resumenz':
        $userController->resumenZ();
        break;
    case 'z':
        $userController->guardarZ();
        $registrerController->renderHome();
        break;

        /* case 'registro':
        $registrerController->renderRegistro();
        break;
    case 'registrar':
        $userController->registrar();
        break;*/
    default:
        echo ('404 Page not found');
        break;
}
