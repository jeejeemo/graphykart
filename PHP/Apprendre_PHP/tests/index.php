<?php
/* $connexion = new PDO('mysql:host=localhost;dbname=tutophp;charset=UTF8', 'root', '');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$object = $connexion->query('SELECT * FROM articles');
while ($datas = $object->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $datas;
 }
var_dump($connexion);
var_dump($object);
var_dump($results); */


echo 'method plus';
//var_dump(strrev($mot));**

$array = [12,15,9,16];

$array_revers = array_reverse($array);
$new_array[]  = array_unshift($array, "17","19");

//var_dump($array); 
var_dump ($array); 

?>
