<?php
require_once "models/registrerModel.php";
require_once "views/registrerView.php";

class RegistrerController
{
    private $view;
    private $registrerModel;
    private $helper;



    function __construct()
    {
        $this->view = new RegistrerView();
        $this->registrerModel = new RegistrerModel();
        $this->helper = new SessionHelper();
    }

    function renderHome()
    {
        $logueado = $this->helper->checkUser();
        $this->view->renderHome($logueado);
    }

    function renderVentas()
    {
        $logueado = $this->helper->checkUser();
        $ventas = $this->registrerModel->getVentas();
        $this->view->renderVentas($ventas, $logueado);
    }

    function agregarVenta()
    {

        if (empty($_POST['monto']) || ($_POST['monto']) < 0) {

            die();
        }
        $monto = $_POST['monto'];
        $tipoVenta = $_POST['tipoVenta'];
        $fecha = date('Y/m/d');

        $this->registrerModel->agregarVenta($monto, $tipoVenta, $fecha);
    }

    function renderLogin()
    {
        $logueado = $this->helper->checkUser();
        $this->view->renderLogin($logueado);
    }

    function renderRegistro()
    {
        $logueado = $this->helper->checkUser();
        $this->view->renderRegistro($logueado);
    }
}
