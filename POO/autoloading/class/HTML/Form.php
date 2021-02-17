<?php
namespace Tuto\HTML;

class Form {
    
    /**
     * @var array
     */
    private array $datas;

    /**
     * @var string
     */
    public $surround = 'p';

    /**
     * @param array $datas
     */
    public function __construct($datas = array())
    {
        $this ->datas = $datas;
    }

    
    /**
     * @param String $html
     * 
     * @return String
     */
    protected function surround(String $html){
        return "<{$this->surround}> {$html} </{$this->surround}>";
    
    }

    public function input($name){
        return $this -> surround('<input type = "text" name ="'.$name.'" value = "'.$this -> getValue($name).'" >');
    }

    protected function getValue($index){
        return isset($this ->datas[$index]) ? $this->datas[$index]:null ;
    }
    
    public function submit(){
        return $this -> surround('<button type = "submit">Envoyer</button>');
    }
}