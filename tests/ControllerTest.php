<?php

use App\Repository\CoderRepository;
use App\Models\Coder;
use App\Controllers\CoderController;
use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    // function testSiFunctionPlay()
    // {

    // }

    // function testSiFunctionKill()
    // {
        
    // }

    function testSiFunctionResetDevuelveTrue()
    {
        //Definir escenario del test
        $obj = new CoderController();
        //Ejecutar escenario del test
        $response = $obj->reset();
        //Compruebo assertion del test
        $this->assertTrue($response);
    }

    function testSiFunctionListarDevuelveUnArray()
    {
        //Definir escenario del test
        $newRepo = new CoderRepository();
        $allCoders = $newRepo->selectAllCoders();
        $obj = new CoderController();
        //Ejecutar escenario del test
        $lista = $obj->listar();
        //Compruebo assertion del test
        $this->assertIsArray($lista);
    }
}



//Definir escenario del test
        //Ejecutar escenario del test
        //Compruebo assertion del test