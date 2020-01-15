<?php
require dirname(__DIR__).DIRECTORY_SEPARATOR.'APP'.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Creneau.php';

$creneau = new Creneau(9,12);
// $creneau->debut=9;
// $creneau->fin=12;
$creneau2 = new Creneau(14, 16);

echo $creneau -> toHTML();

var_dump(
    // $creneau -> inclusHeure(10),
    // $creneau2 -> inclusHeure(10)
    $creneau ->intersect($creneau2)
);