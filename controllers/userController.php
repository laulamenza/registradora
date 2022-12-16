<?php
require_once 'models/registrerModel.php';
require_once 'helpers/sessionHelper.php';
require_once 'views/registrerView.php';


class UserController
{
    private $view;
    private $helper;
    private $registrerModel;


    function __construct()
    {
        $this->view = new RegistrerView();
        $this->helper = new SessionHelper();
        $this->registrerModel = new RegistrerModel();
    }

    function loguear()
    {
        if (empty($_POST['usuario']) || empty($_POST['password'])) {
            $logueado = $this->helper->checkUser();
            $mensaje = "Complete los campos";
            $this->view->renderError($logueado, $mensaje);
            die();
        }

        $userName = $_POST['usuario'];
        $userPassword = $_POST['password'];
        $user = $this->registrerModel->loguear($userName);

        //Si el usuario existe y las contraseñas coinciden
        if ($user && password_verify($userPassword, ($user->password))) {
            $this->helper->iniciaSesion($user);
            $logueado = $this->helper->checkUser();
            $this->view->renderHome($logueado);
        } else {
            $logueado = $this->helper->checkUser();
            $mensaje = "Usuario o contraseña invalidos";
            $this->view->renderError($logueado, $mensaje);
        }
    }

    function registrar()
    {
        if (empty($_POST['nombre']) ||  empty($_POST['password'])) {
            $logueado = $this->helper->checkUser();
            $mensaje = "Complete los campos";
            $this->view->renderError($logueado, $mensaje);
            die();
        }
        $nombre = $_POST['nombre'];
        $clave = $_POST['password'];
        $check = $this->registrerModel->getUser($nombre);
        if ($check[0] > 0) {
            $logueado = $this->helper->checkUser();
            $mensaje = "El usuario ya existe";
            $this->view->renderError($logueado, $mensaje);
        } else {
            $userPassword = password_hash($clave, PASSWORD_BCRYPT);
            $this->registrerModel->registrar($nombre, $userPassword);
            $this->helper->iniciaSesion($nombre);
            $logueado = $this->helper->checkUser();

            $this->view->renderHome($logueado);
        }
    }

    function logout()
    {
        $this->helper->cerrarSesion();
        header('location:' . BASE_URL . 'home');
    }

    function resumenZ()
    {
        $montoEfectivo = $this->registrerModel->getVentasEfec();
        $montoOtrasVentas = $this->registrerModel->getOtrasVentas();
        $cantVentasEfec = $this->registrerModel->getCantEfec();
        $cantOtrasVentas = $this->registrerModel->getCantOtras();
        $fecha = date('d/m/Y');

        $logueado = $this->helper->checkUser();
        $this->view->renderZ($logueado, $montoEfectivo, $montoOtrasVentas, $cantVentasEfec, $cantOtrasVentas, $fecha);
    }

    function guardarZ()
    {
        $montoEfectivo = $_POST['montoEfectivo'];
        $montoOtrasVentas = $_POST['montoOtras'];
        $cantVentasEfec = $_POST['cantEfect'];
        $cantOtrasVentas = $_POST['cantOtras'];
        $fecha = date('Y/m/d');

        $this->registrerModel->guardarZ($fecha, $montoEfectivo, $montoOtrasVentas, $cantVentasEfec, $cantOtrasVentas);
        $this->registrerModel->vaciarLibro();
    }
}
