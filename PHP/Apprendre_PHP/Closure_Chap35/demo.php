<?php
require 'vendor/autoload.php';
$eleves = [
	[
		'nom' => 'Anne',
		'age' => 18,
		'moyenne' => 15
	],
	[
		'nom' => 'Marc',
		'age' => 21,
		'moyenne' => 12
	],
	[
		'nom' => 'Jean',
		'age' => 20,
		'moyenne' => 16
	],
	[
		'nom' => 'Lea',
		'age' => 19,
		'moyenne' => 10
	],
	[
		'nom' => 'John',
		'age' => 18,
		'moyenne' => 8
	]

];
/*Closure ou fonction annonyme avec var exterieur*/
//$key = 'age';
//$sort = function($eleve1, $eleve2) use ($key){
//	return $eleve1[$key] - $eleve2[$key];
//};

/*Closure ou fonction simple*/
//$sortMoyenne = function($eleve1, $eleve2){
//	return $eleve1['moyenne'] - $eleve2['moyenne'];
//};

/*Closure dans une fonction*/

//function sorterByKey($key){
//	return function($eleve1, $eleve2) use ($key){
//		return $eleve1[$key] - $eleve2[$key];
//	};
//}

/*function sortByKey(array $array, string $key){
	usort ($array, function ($a,$b) use ($key){
		return $a[$key] -$b[$key];
	});
	return $array;*/
//}

$eleveMoyenne = array_filter ($eleves, function($eleve){
	return $eleve['moyenne'] <10 ;
});

dump ($eleveMoyenne);