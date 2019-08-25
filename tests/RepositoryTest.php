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
    
    function testSiFuncionSelectAllCodersDevuelveUnArray()
    {
        //Defino el escenario del test
        $newRepo = new CoderRepository();
        //Ejecuto mi escenario
        $array = $newRepo->selectAllCoders();
        //Compruebo mi escenario
        $this->assertIsArray($array);
    }

    function testSiFuncionUpdateByIdDevuelveTrue()
    {
        //Defino el escenario del test
        $coder = new Coder();
        $idUpdate = $coder->getId();
        $newRepo = new CoderRepository();
        //Ejecuto mi escenario
        $execute = $newRepo->updateById($idUpdate);
        //Compruebo mi escenario
        $this->assertTrue($execute);
    }

    function testSiFuncionUpdateAllDevuelveTrue()
    {
        //Defino el escenario del test
        $newRepo = new CoderRepository();
        //Ejecuto mi escenario
        $execute = $newRepo->updateAll();
        //Compruebo mi escenario
        $this->assertTrue($execute);
    }

}
