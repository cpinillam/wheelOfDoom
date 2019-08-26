<?php

use App\Models\Coder;
use App\Controllers\CoderController;
use PHPUnit\Framework\TestCase;
class ControllerTest extends TestCase
{
   
    function testSiFunctionListarDevuelveUnArray()
    {
        //Definir escenario del test
        $coders = new coderController();
        $lista = $coders->listCoders();
        
        //Ejecutar escenario del test
        
        //Compruebo assertion del test
        $this->assertIsArray($lista);
    }
}