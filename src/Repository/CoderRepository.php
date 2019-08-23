<?php

namespace App\Repository;

class CoderRepository
{

    private $table = 'coder';
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "db_wheel";

    function connectDB()
    {
        $this->conexion = mysqli_connect($this->server, $this->user, $this->password) or die ("No se ha podido conectar al servidor");

        $dbSelected = mysqli_select_db($this->conexion, $this->db) or die ("No se ha podido leer la base de datos");

        if(!$this->conexion)
        {
            $response = "No se ha podido conectar";
            echo $response;
        }

        $response = "Conexion Exitosa";
        echo $response;
        return $response;
    }

    function selectAll()
    {
        $conn = $this->conexion;
        $query = "SELECT * FROM coder";
        $respuestas = mysqli_query($conn, $query);

        $arrayCoders = array();
        while ($row = mysqli_fetch_array( $respuestas ))
        {
            $arrayCoders[] = array 
            (
            "id" => $row['id_coder'],
            "coderName" => $row['name_coder'],
            "state"=> $row['dead']
        );
        };

        echo $arrayCoders[3][coderName];
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