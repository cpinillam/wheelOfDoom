<?php
namespace App\Views;
use App\Controllers\CoderController; 
require "../Controllers/CoderController.php";

$init = new CoderController();
$coders = $init->listCoders();
$i=0;
?>

<html><ul>

<?php

    foreach ($coders as $coder)
    {
        echo '<li>' . $coder->getName() . '</li>';
    };
    ?>
</ul>


</html>

<!-- //$init = new CoderController();
// $name = $init->listCoders();

// echo $init; -->
