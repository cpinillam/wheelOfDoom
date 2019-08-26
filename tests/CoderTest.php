<?php


use App\Models\Coder;
use App\Repository\CoderRepository;
use PHPUnit\Framework\TestCase;
class CoderTest extends TestCase
{    
    function testSiDevuelveUnIdInt()
    {
        //Definir escenario del test
        $coderId = 2;
        $obj = new Coder();
        $obj->setId($coderId);
        //Ejecutar escenario del test
        $response = $obj->getId();
        //Compruebo assertion del test
        $this->assertIsInt($response);
    }
    function testElNumeroDeIdCoincide()
    {
        //Definir escenario del test
        $coderId = 2;
        $obj = new Coder();
        $obj->setId($coderId);
        //Ejecutar escenario del test
        $response = $obj->getId();
        //Compruebo assertion del test
        $this->assertEquals($coderId, $response);
    }
    function testSiElNombreEsString()
    {
        //Definir escenario del test
        $nuria = new Coder();
        //Ejecutar escenario del test
        $respuesta = $nuria->getName();
        //Compruebo assertion del test
        $this->assertIsString($respuesta);
    }
    function testQueElNombreSeaIgualAlQueLeDiga()
    {
        //Defino el escenario del test
        $coderName = 'laia';
        $laia = new Coder();
        $laia->setName($coderName);
        //Ejecuto mi escenario
        $nombre =  $laia -> getName();
        //Compruebo mi escenario
        $this-> assertEquals($coderName ,$nombre);
    }
    function testSiFuncionGetStatusDevuelveUnInt()
    {
        //Definir escenario del test
        $coder = new Coder();
        //Ejecutar escenario del test
        $alive = $coder->getStatus();
        //Compruebo assertion del test
        $this->assertIsInt($alive);
    }
    function testSiFuncionGetStatusDevuelveElEstadoCorrecto()
    {
        //Definir escenario del test
        $coderVivo = 0;
        $coder = new Coder();
        //Ejecutar escenario del test
        $alive = $coder->getStatus();
        //Compruebo assertion del test
        $this->assertEquals($coderVivo, $alive);
    }
    function testSiFuncionGetAllCodersDevuelveUnArray()
    {
        //Defino el escenario del test
        $coder = new Coder();
        //Ejecuto mi escenario
        $array = $coder->getAllCoders();
        //Compruebo mi escenario
        $this->assertIsArray($array);
    }
    function testSiFuncionGetCodersAliveDevuelveUnArray()
    {
        //Defino el escenario del test
        $coder = new Coder();
        $coder->reset();
        //Ejecuto mi escenario
        $array = $coder->getCodersAlive();
        //Compruebo mi escenario
        $this->assertIsArray($array);
    }
    function testSiFuncionRandomDevuelveUnObject()
    {
        //Defino el escenario del test
        $newRepo = new Coder();
        $newRepo->reset();
        $newRepo->getAllCoders();
        $newRepo->getCodersAlive();
        //Ejecuto mi escenario
        $obj = $newRepo->random();
        //Compruebo mi escenario
        $this->assertIsObject($obj);
    }
    function testSiCoderSeleccionadoEstaVivo()
    {
        //Defino el escenario del test
        $coderVivo = 0;
        $coder = new Coder();
        $coder->reset();
        $coder->getAllCoders();
        $coder->getCodersAlive();
        $randomCoder = $coder->random();
        //Ejecuto mi escenario
        $estado = $randomCoder->getStatus();
        //Compruebo mi escenario
        $this->assertEquals($coderVivo, $estado);
        $coder->reset();
    }
    function testSiCoderSeleccionadoTieneNombreString()
    {
        //Defino el escenario del test
        $coder = new Coder();
        $coder->reset();
        $coder->getAllCoders();
        $coder->getCodersAlive();
        $randomCoder = $coder->random();
        //Ejecuto mi escenario
        $estado = $randomCoder->getName();
        //Compruebo mi escenario
        $this->assertIsString($estado);
        $coder->reset();
    }
    function testSiCoderSeleccionadoTieneId()
    {
        //Defino el escenario del test
        $coder = new Coder();
        $coder->reset();
        $coder->getAllCoders();
        $coder->getCodersAlive();
        $randomCoder = $coder->random();
        //Ejecuto mi escenario
        $estado = $randomCoder->getId();
        //Compruebo mi escenario
        $this->assertIsString($estado);
        
    }
}