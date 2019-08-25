<?php
namespace App\Views;
use App\Controllers\CoderController; 
require "../Controllers/CoderController.php";

$init = new CoderController();
$coders = $init->listCoders();
$i=1;
$stateStyle = '';
?>

<html><ul>

<?php

    foreach ($coders as $coder)
    {   
        if ($coder->getState == 0) {$stateStyle = 'alive';};
        echo '<li>' . $i . ' ' . $coder->getName() . ' ' . $stateStyle .'</li>';
        $i++;
    };
    ?>
</ul>


</html>

<!-- //$init = new CoderController();
// $name = $init->listCoders();

// echo $init; -->
