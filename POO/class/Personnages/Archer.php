<?php
// namespace Tutoriel;
// class Archer extends Personnage {
//         public $arc = 10;
//         public $vie = 40;
// }

class Archer extends Personnage {


        

        public function __construct(string $name,)
        {
                $this -> vie = $this -> vie / 2;
                parent::__construct($name);
                
        }


        public function attaque($cible)
        {
                //$this->vie += $this->atk;
                //$cible -> vie -= $this ->atk;
                $cible->vie = $this->atk;
                $cible->empecher_negatif();
        }

}

class Albaletrier extends Archer {}