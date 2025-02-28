<?php
declare(strict_types=1);

namespace Sikuda\Php1c;
require_once __DIR__."/../vendor/autoload.php";

use Sikuda\Php1c\Number1C;

$REZULTAT = null;
function SLOZHENIE($D,$YA){
    $tmp = new Number1C("4");
    $tmp = $tmp->add($D);
    $tmp = $tmp->add($YA); 
    return $tmp;
}    
$REZULTAT = SLOZHENIE(1,2);
echo $REZULTAT;


