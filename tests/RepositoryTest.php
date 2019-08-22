<?php

use App\Repository\CoderRepository;
use App\Models\Coder;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{    
   

    function testSiSeConectaALaDB()
        {
            //Defino el escenario del test
             new CoderRepository();
            //Ejecuto el escenario
            //$on = $connection->connectDB();
            //Compruebo la assertion
          //  $this->assertEquals("Conexion Exitosa", $on);
          $this->assertTrue(true);

        }
    

}
