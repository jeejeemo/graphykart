<?php
namespace Tutoriel1;

class Archer extends Personnage {

	public $arc =3;
	public $vie = 40;


	public function __construct( $nom ) {
		$this -> vie = $this ->vie / 2 ;
		parent::__construct( $nom);
	}

	public function attaque($cible){
//		$this->vie += $this->atk;
//		$cible -> vie -= $this ->atk;
		$cible ->vie -= $this -> atk;
		parent::attaque($cible);
	}

}