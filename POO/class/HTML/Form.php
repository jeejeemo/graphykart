<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 22/02/2018
 * Time: 14:26
 */
namespace Tutoriel\HTML;
class Form
{

    /**
     * @var array
     */
   protected $data;
    /**
     * @var string
     */
    public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data
     */
    public function __construct($data=array()){
            $this->data = $data;

    }

    /**
     * @param $html
     * @return string
     */
   protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @return array
     */
    public function getData(){
        return $this->data;
    }

    /**
     * @param $index
     * @return mixed|null
     */
   protected function getValue($index){
        if(isset($this->data[$index])){
            return $this->data[$index];
        }
        else{
            return null;
        }
    }

    /**
     * @param $dd
     * @return string
     */
    public function input($dd){
        return $this->surround('<input type="text" name="'.$dd.'" value ="'.$this->getValue($dd).'"/>');
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround( '<p><button type="submit">Envoyer</button></p>');
    }

}