<?php

use Personnage\Personnage;
require 'class/Autoloader.php';
\Tuto\Autoloader::register();

// $merlin = new Personnage('Merlin');
// $harry = new Personnage('Harry');

// $legolas = new Archer('Legolas');

// var_dump($legolas);

$newPersonnage1 = new Personnage('John');

// $newPersonnage1 -> getNom();
$newPersonnage1->setNom("Arthur");
echo $newPersonnage1 -> getNom();

//var_dump($newPersonnage1->getNom());