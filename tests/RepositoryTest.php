<?php

use App\Repository\CoderRepository;
use App\Models\Coder;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    function testSiSeConectaALaDB()
    {
        //Defino el escenario del test
        $connection = new CoderRepository();
        $msjEsperado = "Conexion Exitosa";
        //Ejecuto el escenario
        $on = $connection->connectDB();
        //Compruebo la assertion
        $this->assertEquals($msjEsperado, $on);
    }
    
    

}
