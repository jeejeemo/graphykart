<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 24/10/2019
 * Time: 14:01
 */
?>
<form action="jeu1" method="POST">
<input type="text" name="chiffre" id="" placeholder="">
<button type="submit">Deviner</button>
</form>



<?php

$aDeviner =150;
$error= null;
$success = null;
$value = null;

   if(isset($_POST['chiffre'])){
	    $value = (int)$_POST['chiffre'];
       if($value>$aDeviner){
           $error = "Votre chiffe est trop grand...";
       }elseif($value<$aDeviner){
	        $error = "Votre chiffe est trop petit...";
       }else{
           $success = "Bravo ! Vous avez deviné le chiffre $aDeviner .</strong>";
       }
       echo '<p>'.$error .'</p>';
       echo '<p>'.$success .'</p>';
   }


