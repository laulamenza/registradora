<?php


class ConnectionModel
{

    

    function conexionSql()
    {
        $user = 'root';
        $pass = '';
        $dbname = 'registradora';
        $host = 'localhost';
        $port = '3306';

        $conexion= new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $pass);

        return $conexion;
    }

    
}
