<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 26/08/2019
 * Time: 14:08
 */
/*$notes = (int)readline("Entrez votre note?");

if($notes>10){
	echo "Bravo, vous avez la moyenne!";
}
elseif ($notes ===10){
	echo "Bravo, vous avez JUSTE la moyenne!";
}
else{
	echo 'Dommage, vous n\'avez pas la moyenne!';
}*/

/*$action = (int)readline("Entrez votre action: (1:attaquer, 2:défendre, 3: ne rien faire ");
if($action ===1){
	echo 'J\'attaque!';
}
elseif ($action ===2){
	echo 'Je défends!';
}
else{
	echo 'Je ne fais rien';
}*/
/*$action = (int)readline("Entrez votre action: (1:attaquer, 2:défendre, 3: ne rien faire ");
switch ($action){
	case 1:
		echo 'J\'attaque!';
		break;
	case 2:
		echo 'Je défends!';
		break;
	case 3:
		echo 'Je ne fais rien';
		break;
	default:
		echo 'Commande inconnue';

}
*/
$heure = (int)readline("Entrez une heure: ");

if(($heure>19 || $heure<9) || ($heure>12 && $heure<14)) {
	echo 'Le magasin sera fermé';
}
	else{
		echo 'Le magasin sera ouvert';
};

/*
 * VRAI&&VRAI = VRAI
 * VRAI&&FAUX = FAUX
 * FAUX&&VRAI = FAUX
 * FAUX&&FAUX = FAUX
 *
 * VRAI||VRAI = VRAI
 * VRAI||FAUX = VRAI
 * FAUX||VRAI = VRAI
 * FAUX||FAUX = FAUX
 *
 */