<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'Compteur.php';

class DoubleCompteur extends Compteur {
	const INCREMENT = 20;

	//	public function recuperer(): int {
//		if(!file_exists($this->fichier)) {
//			return 0;
//		}
//		return 2 * (int)file_get_contents($this->fichier);
//		return 2 * parent::recuperer();
//	}


}