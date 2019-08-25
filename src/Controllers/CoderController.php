<?php
namespace App\Controllers;

use App\Models\Coder;
require '../Models/Coder.php';

// require_once '..\Models\Coder.php';

class CoderController {
   

    public function listCoders() {

        $codersInit = new Coder();
        $coders = $codersInit->getAllCoders();
        $codersArray = [];
        $i=0;
        return $coders;
       

    }

   

}
    // $obj = new CoderController();
    // $coders = $obj->listCoders();
    
    // echo $coders[0]->getName();