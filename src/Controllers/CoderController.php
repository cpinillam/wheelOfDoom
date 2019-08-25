<?php

namespace App\Controllers;
use App\Repository\CoderRepository;

class CoderController 
{
    private $id;

    function play() 
    {
        return $id;
    }
    
    function kill() 
    {

    }

    function reset() 
    {
        $obj = new CoderRepository();
        $updatedCoders = $obj->updateAll();
        return $updatedCoders;
    }

    function listar() 
    {
        $newRepo = new CoderRepository();
        $allCoders = $newRepo->selectAllCoders();
        return $allCoders;
    }

}