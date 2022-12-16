<?php
require_once 'models/connectionModel.php';

class RegistrerModel extends ConnectionModel
{

    private $db;

    function __construct()
    {
        $this->db = $this->conexionSql();
    }



    function getVentas()
    {
        $sql = 'select * from librodiario';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $ventas;
    }

    function agregarVenta($monto, $tipoVenta, $fecha)
    {
        $sql = 'INSERT INTO librodiario (monto, tipoVenta, fecha) 
        VALUES (?, ?, ?)';



        $sentencia = $this->db->prepare($sql);
        $sentencia->execute([$monto, $tipoVenta, $fecha]);
    }

    function loguear($userName)
    {

        $query = $this->db->prepare('select * FROM login WHERE user = ?');
        $query->execute([$userName]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function registrar($nombre, $password)
    {
        $sql = 'INSERT INTO login (user, password) 
        VALUES (?, ?)';

        $sentencia = $this->db->prepare($sql);
        $sentencia->execute([$nombre, $password]);
    }

    function getUser($user)
    {
        $query = $this->db->prepare('select COUNT(*) FROM login WHERE user = ?');
        $query->execute([$user]);
        $cuenta = $query->fetch(PDO::FETCH_NUM);

        return $cuenta;
    }

    function getVentasEfec()
    {
        $sql = 'select SUM(monto) from librodiario where tipoVenta="efectivo"';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $montoEfectivo = $sentencia->fetch(PDO::FETCH_NUM);

        return $montoEfectivo;
    }

    function getOtrasVentas()
    {
        $sql = 'select SUM(monto) from librodiario where tipoVenta!="efectivo"';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $montoOtras = $sentencia->fetch(PDO::FETCH_NUM);

        return $montoOtras;
    }

    function getCantEfec()
    {
        $sql = 'select count(*) from librodiario where tipoVenta="efectivo"';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $cantVentasEfect = $sentencia->fetch(PDO::FETCH_NUM);

        return $cantVentasEfect;
    }

    function getCantOtras()
    {
        $sql = 'select count(*) from librodiario where tipoVenta!="efectivo"';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $cantOtrasVentas = $sentencia->fetch(PDO::FETCH_NUM);

        return $cantOtrasVentas;
    }

    function guardarZ($fecha, $montoEfectivo, $montoOtrasVentas, $cantVentasEfec, $cantOtrasVentas)
    {
        $sql = 'INSERT INTO libroz (fecha, cantVentasEfectivo, cantVentasOtras, montoEfectivo, montoOtras) 
        VALUES (?, ?, ?, ?, ?)';



        $sentencia = $this->db->prepare($sql);
        $sentencia->execute([$fecha, $montoEfectivo, $montoOtrasVentas, $cantVentasEfec, $cantOtrasVentas]);
    }

    function vaciarLibro(){
        $sql = 'DELETE  from librodiario ';

        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
    }
}
