<?php

//$mot = strtolower(readline("Veuillez entrer un mot: "));
//$revers= strrev($mot);
//if($mot===$revers){
//	echo "Ce mot est un palyndrome";
//}else{
//	echo "Ce mot n'est pas un palyndrome";
//}

//$notes = [10,20,13];
//array_splice($notes, 2, 0, 16);;
////$moyenne = round(array_sum($note)/count($note),2);
////print_r($moyenne);
//
//print_r($notes);
$insultes = ['merde', 'con', 'salaupard'];
$asterisque = [];
foreach ($insultes as $insulte){
	/*On veut remplacer la 1er asterisque par la 1ere lettre du mot */
	$lettre1 = substr($insulte, 0,1);
	// Trouver la premiere lettre
	// Trouver la taille du mot -1
	// Concaténer la première lettre avec str-repeat

	$asterisque = $lettre1 .str_repeat('*', strlen($insulte)-1);
}
var_dump($lettre1);
$phrase = readline("Entrez votre phrase: ");
$phrase = str_replace($insultes,$asterisque, $phrase);
/*
foreach($insultes as $insulte){
	$taille = strlen($insulte);
	$replace = str_repeat('*',$taille);
	$phrase = str_replace($insulte,$replace,$phrase);
}
*/
echo $phrase;