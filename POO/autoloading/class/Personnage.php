<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 22/02/2018
 * Time: 10:04
 */
namespace Personnage;

class Personnage
{
    protected $vie =100;
    protected $atk = 20;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function regenerer($vie=null){
        if(is_null($vie)){
            $this->vie = 100;
        }
        else{
            $this->vie += $vie;
        }
    }
    
    public function getNom(){
        return $this->name;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function mort(){
        if($this->vie <=0){
            echo "Mort";
        }
        else if($this->vie >0){
            echo "Vivant";
        }

    }
    protected function empecher_negatif()
    {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }

    public function attaque($cible)
    {
        //		$this->vie += $this->atk;
        //		$cible -> vie -= $this ->atk;
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }


}

/* class Personnage {
    const MAX_VIE = 100;
    protected int $vie = 80;
    protected int $atk = 20;
    private $nom;

	public function getNom() {
		return $this -> nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}


    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null)
    {
        if(is_null($vie)){
            $this->vie = self::MAX_VIE;
        }
        else{
            $this->vie += $vie;
        }
    }

    
} */