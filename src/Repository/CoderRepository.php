<?php

namespace App\Repository;

class CoderRepository {

    private $table = 'coders';
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "root";
    private $db = "db_wheel";

    function connectDB()
    {
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        if(!$conexion)
        {
            $response = "No se ha podido conectar";
            echo $response;
            return $response;
        };
        $response = "se ha podido conectar";
        echo $response;
    }

    function selectById($id) {}

    function selectAll() {
        $query = 'select * from $this->table';
        
        return $response;
    }
    function selectByDead() {
        $query = 'select * from $this->table Where 'dead' = 1';
    }




    
}

