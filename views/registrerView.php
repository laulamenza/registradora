<?php
require_once 'libs/Smarty.class.php';
require_once 'helpers/sessionHelper.php';

class RegistrerView
{


    function renderVentas($ventas, $logueado)
    {
        $plantilla = new Smarty();

        $plantilla->assign('BASE_URL', BASE_URL);
        $plantilla->assign('logueado', $logueado);
        $plantilla->assign('ventas', $ventas);

        $plantilla->display('templates/ventas.tpl');
    }


    function renderHome($logueado)
    {
        $plantilla = new Smarty();

        $plantilla->assign('BASE_URL', BASE_URL);
        $plantilla->assign('logueado', $logueado);


        $plantilla->display('templates/home.tpl');
    }

    function renderLogin($logueado)
    {
        $plantilla = new Smarty();
        $plantilla->assign('logueado', $logueado);

        $plantilla->assign('BASE_URL', BASE_URL);



        $plantilla->display('templates/login.tpl');
    }

    function renderError($logueado, $mensaje)
    {
        $plantilla = new Smarty();
        $plantilla->assign('BASE_URL', BASE_URL);
        $plantilla->assign('logueado', $logueado);
        $plantilla->assign('mensaje', $mensaje);

        $plantilla->display('templates/error.tpl');
    }

    function renderRegistro($logueado)
    {
        $plantilla = new Smarty();
        $plantilla->assign('logueado', $logueado);
        $plantilla->assign('BASE_URL', BASE_URL);

        $plantilla->display('templates/registro.tpl');
    }

    function renderZ($logueado, $montoEfectivo, $montoOtrasVentas, $cantVentasEfec, $cantOtrasVentas, $fecha)
    {
        $plantilla = new Smarty();
        $plantilla->assign('logueado', $logueado);
        $plantilla->assign('montoEfectivo', $montoEfectivo);
        $plantilla->assign('montoOtras', $montoOtrasVentas);
        $plantilla->assign('cantEfect', $cantVentasEfec);
        $plantilla->assign('cantOtras', $cantOtrasVentas);
        $plantilla->assign('fecha', $fecha);
        $plantilla->assign('BASE_URL', BASE_URL);

        $plantilla->display('templates/resumenZ.tpl');
    }
}
