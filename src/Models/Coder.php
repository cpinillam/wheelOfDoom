<?php
namespace App\Models;
use App\Repository;

class Coder 
{
    private $id;
    private $name = "";
    private $dead = false;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;

    }

    function setName($name){
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getAll() {
        $query = new Repository();
        $query->selectAll();
    }

    function __construct ($id = null, $name = "", $dead= false) {
        $this->id = $id;
        $this->name = $name;
        $this->dead = $dead;
    }
}



