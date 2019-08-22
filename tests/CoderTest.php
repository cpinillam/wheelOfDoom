<?php

use App\Models\Coder;
use PHPUnit\Framework\TestCase;

class CoderTest extends TestCase
{    
    public function testeaSiDevuelveUnIdInt()
    {
        //Definir escenario del test
        $obj = new Coder();
        $obj->setId(2);
        //Ejecutar escenario del test
        $response = $obj->getId();
        //Hacemos assertion del test
        $this->assertIsInt($response);

    }

    public function testeaElNumeroDeIdCoincide()
    {
        //Definir escenario del test
        $obj = new Coder();
        $obj->setId(2);
        //Ejecutar escenario del test
        $response = $obj->getId();
        //Hacemos assertion del test
        $this->assertEquals(2, $response);
    }

    public function testeaSiElNombreEsString()
    {
        //Definir escenario del test
        $nuria = new Coder();
        $respuesta = $nuria->getName();
        $this->assertIsString($respuesta); 
    }
    
    function testeaQueElNombreSeaIgualAlQueLeDiga()
    {
        $laia = new Coder();
        $laia->setName('laia');


        $nombre =  $laia -> getName();
        
        $this-> assertEquals('laia' ,$nombre);

    }
}
