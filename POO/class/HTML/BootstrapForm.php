<?php
namespace Tutoriel\HTML;
class BootstrapForm extends Form{

    protected function surround($html){
        return "<div class =\"form-group\">{$html}</div>";
    }


    public function input($dd){
        return $this->surround('<label>'.$dd.'<input type="text" name="'.$dd.'" value ="'.$this->getValue($dd).'" class="form-control">');
    }
    public function submit(){
        return $this->surround( '<p><button type="submit" class="btn btn-primary">Envoyer</button></p>');
    }
}