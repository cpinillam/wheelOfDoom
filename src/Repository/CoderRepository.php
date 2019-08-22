<?php

namespace App\Repository;

class CoderRepository
{

    private $table = 'coders';
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "db_wheel";

    function connectDB()
    {
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        if(!$conexion)
        {
            $response = "No se ha podido conectar";
            echo $response;
        }

        $response = "Conexion Exitosa";
        return $response;
    }

    function selectAll()
    {
        $query = 'SELECT * FROM coders';
        $respuesta = mysqli_query($this->conexion, $query);
        
        echo $respuesta;
    }

    function selectById($id)
    {

    }

    function selectByDead()
    {
        $query = 'SELECT * 
        FROM $this->db 
        WHERE dead = 1';
    }

}

$obj = new CoderRepository();
$obj->connectDB();
$obj->selectAll();