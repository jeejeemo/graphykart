<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 22/02/2018
 * Time: 10:04
 */
namespace Tutoriel;
class Personnage
{
    protected $vie =100;
    private $atk = 20;
    private $name;

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
    public function attack($cible){
//        $this // Attaquant
//        $cible // Defenseur
//        defenseur.vie -= attaquant.atk
            $cible->vie -= $this->atk;

    }
    public function getNon(){
        return $this->name;
    }

    public function mort(){
        if($this->vie <=0){
            echo "Mort";
        }
        else if($this->vie >0){
            echo "Vivant";
        }

    }


}