<?php
namespace Tutoriel1;

class Personnage {
	protected static $max_vie = 150;

	protected $nom;
	protected $vie = 100;
	protected $atk = 20;

	public function __construct($nom) {
		$this -> nom = $nom;
	}
	public function getNom(){
		return $this -> nom ;
	}

	public function getVie(){
		return $this -> vie;
	}

	public function getAtk(){
		return $this -> atk ;
	}

	public function setNom($nom){
		$this ->nom = $nom;
	}

	public function crier(){
		echo 'LEEROY JENKINS';
	}
	public function regenerer($vie= null){

		if(is_null($vie)){
			$this -> vie = self::$max_vie;
		}else{
			$this ->vie += self::$max_vie;
		}
	}

	public function isDead(){
//		if($this->vie<=0){
//			echo $this ->nom . " est mort";
//		}else{
//			echo $this ->nom . " est en vie";
//		}
		return $this->vie <=0 ;
	}

	protected function empecher_negatif(){
		if($this->vie<0){
			$this ->vie =0;
		}
	}

	public function attaque($cible){
//		$this->vie += $this->atk;
//		$cible -> vie -= $this ->atk;
		$cible ->vie -= $this -> atk;
		$cible-> empecher_negatif();
	}
}