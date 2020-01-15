<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 19/09/2019
 * Time: 11:00
 */
/*function bonjour($nom =null){
	if($nom === NULL){
		return "Bonjour!\n";
	}
	return 'Bonjour ' .$nom. "\n";
}
$salutations = bonjour();
echo $salutations;
echo bonjour('Marie');*/

function repondre_oui_non($phrase){
	while(true){
		$reponse = readline($phrase ."- (o)ui/(n)on :");
		if($reponse==="o"){
			return true;
		}elseif ($reponse ==="n"){
			return false;
		}
	}
}

//$resultat = repondre_oui_non('Voulez-vous continuer ?');

//si l'utilisateur tape "o" => true
//si l'utilisateur tape "n" => false
function demander_creneau($phrase = 'Veuillez entrer un creneau ?') {
	echo $phrase . "\n";
	while (true) {
		$ouverture = (int)readline( 'Heure d\'ouverture: ' );
		if ($ouverture >= 0 && $ouverture <= 23) {
			break;
		}
	}
	while (true) {
		$fermeture = (int)readline( 'Heure de fermeture: ' );
		if ( $fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture ) {
			break;
		}
	}
	return [$ouverture, $fermeture];
}

function demander_creneaux($phrase = 'Veuillez entrer vos creneaux'){
	$creneaux = [];
	$continuer = true;
	while($continuer){
		$creneaux[] = demander_creneau();
		$continuer = repondre_oui_non('Voulez-vous continuer? ');
	}
	return $creneaux;
};

$creneaux = demander_creneaux('Entrez vos creneaux?:');
var_dump($creneaux);

