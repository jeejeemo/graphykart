<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 26/08/2019
 * Time: 16:10
 */
/*$chiffre = NULL;*/

/*while($chiffre !==10){
	$chiffre = (int)readline("Entrez une heure: ");
}
echo 'Bravo vous avez gagné !';*/

/*for($i=0; $i<10; $i++){
	echo "- $i \n";
}*/

//$notes =[10,15,16];

	//*********1*********//
		/*for($i=0; $i<3; $i++){
			echo "-$notes[$i]\n";
		}*/
		//********2**********//
		/*foreach($notes as $note){
			//echo "-$note\n";
			echo "-".$note ."\n";
		}*/
		//***********3**********//
		/*$eleves = [
			'cm2' => ['Paul','Jean','Sylvie', 'Florian'],
			'cm1' => ['Jacques', 'Emilie', 'Charles', 'Zoe']
		];
		foreach ($eleves as $classe => $list_eleve){
			echo "La classe de $classe \n";
			foreach ($list_eleve as $eleve){
				echo "$eleve \n";
			}
			echo "\n";
		};*/

/****************************************************************************************************
		/* Demande à l'utilisateur d'entrer une note ou de taper "fin"
			Chaque note est sauvegardée dans un tableau $notes(pensez $notes[])
			à la fin on affiche le tableau de notes sous forme de liste
		*/
		//Tant que l'utilisateur ne tape pas "fin" ...
			//On ajoute la note tapée au tableau $notes
		//Pour chaque note dans notes
			// On affiche  -note
//
//$notes = [];
//$action = NULL;
///*TANT QUE L'UTILISATEUR NE TAPE PAS FIN */
//	while($action !== "fin"){
//		$action=readline("Entrez une nouvelle note (ou \'fin'\ pour terminer la saisie: ");
//		if($action !== "fin"){
//			$notes[] = (int)$action;
//		}
//	}
///*POUR CHAQUE NOTE */
//	foreach ($notes as $note){
///*ON AFFICHE */
//		echo "- $note \n";
//	}

/*****************************************************************************************/
/*
On veut demander a l'utilisateur de rentrer les horaires d'ouverture d'un magasin.
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert.
*/

// On demande à l'utilisateur de rentrer un créneaux
	// On demande de rentrer l'heure de début.
	// On demande de rentrer l'heure de fin.
	// On vérifie si l'heure de debut est < à l'heure de fin.
	// On demande si l'utilisateur veut créer un nouveau créneaux (o\n).
// On demande à l'utilisateur de rentrer une heure.
// On affiche l'etat d'ouverture du magasin.

$creneaux =[];
while (true){
	$debut = (int)readline("Entrez l'heure d'\ouverture:");
	$fin = (int)readline("Entrez l'heure de fermeture:");
	if($debut > $fin) {
		echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
	} else{
		$creneaux[] = [$debut, $fin];
		$actions = readline("Voulez vous créer un nouveau creneaux (o\n)?:");
		if ($actions==="n"){
			break;
		}
	}
}
//$heure = (int)readline("A quelle heure voulez-vous visiter le magasin?:");
//$creneauTrouve = false;

echo "Le magasin est ouvert de ";
foreach ($creneaux as $k => $creneau){
	if ($k > 0){
		echo " et de ";
	}
	echo "{$creneau[0]}h à {$creneau[1]}h";
};

//foreach ($creneaux as $creneau){10

//	if($heure >= $creneau[0] && $heure <= $creneau[1]){
//		$creneauTrouve = true;
//		break;
//	}
//}

//if($creneauTrouve){
//	echo "Le magasasin sera ouvert.";
//}else{
//	echo "Désolé, le magasin sera fermé.";
//}