<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 24/10/2019
 * Time: 14:01
 */

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

   }


// Checkbox
// $parfums = [
// 	'Fraise'   => 4,
// 	'Chocolat' => 5,
// 	'Vanille'  => 5
// ];

// //Radio
// $cornets = [
//     'Pot' => 2,
//     'Cornet' => 3
// ];
// //Checkbox
// $supplements = [
//     'Pépites de chocolat' => 1,
//     'Chantilly' => 0.5
// ];



// $title ="Composez votre glace";
// $ingredients = [];
// $total = 0;
// if(isset($_GET['parfum'])) {
//     foreach ($_GET['parfum'] as $prix){
//         if(isset($parfums[$prix])){
//             $ingredients[] = $prix;
//             $total += $parfums[$prix];
//         };
//     };
// }
// if(isset($_GET['supplements'])) {
// 	foreach ($_GET['supplements'] as $supplement){
// 		if(isset($supplements[$supplement])){
// 			$ingredients[] = $supplement;
// 			$total += $supplements[$supplement];
// 		};
// 	};
// }
// if(isset($_GET['cornets'])) {
// 	$cornet = $_GET['cornets'];
// 		if(isset($cornets[$cornet])){
// 			$ingredients[] = $cornet;
// 			$total += $cornets[$cornet];

// 		};
// }
// var_dump($ingredients);

// // require 'layout.php'; ?>
// <h1>Composez votre glace</h1>
//     <div class="row">
//         <div class="col-md-4">
//             <div class="card">
//                 <div class="card-body">
//                     <H5 class="card-title">Votre glace</H5>
//                     <ul>
//                         <?php foreach($ingredients as $ingredient){?>
//                            <li><?= $ingredient ?></li>
//                         <?php };?>

//                     </ul>
//                     <p>
//                         <strong>Prix:</strong> <?= $total?> €
//                     </p>
//                 </div>
//             </div>
//         </div>
//     </div>
// <!---->
// <?php //if($error):?>
// <!--    <div class="alert alert-danger">-->
// <!--      --><?//=$error?>
// <!--    </div>-->
// <?php //elseif ($success):?>
// <!--   <div class="alert alert-success">-->
// <!--       --><?//= $success ?>
// <!--   </div>-->
<!-- // <?php //endif;?>


// <div class="row">
//     <div class="col-md-8">
//         <form action="jeu.php" method="GET" style=" margin-left: 20px; margin-bottom: 30px">
//                     <?php
//                         foreach($parfums as $parfum => $prix){?>
//                           <div class= "checkbox">
//                             <label>
//         <!--                    <input type="checkbox" name="parfum[]" value="--><?//= $parfum ?><!--">-->
//                                 <?= checkbox('parfum',$parfum, $_GET );?>
//                             <?= $parfum ?> <?= $prix ?>€
//                             </label>
//                           </div>
//                         <?php } ?>
//                     <?php foreach($cornets as $cornet => $prix){?>
//                         <div class= "checkbox">
//                             <label>
//                             <?= radio('cornets', $cornet, $_GET);?>
//                             <?= $cornet ?> <?= $prix ?>€
//                             </label>
//                         </div>
//                     <?php }?>

//                     <?php foreach($supplements as $supplement => $prix){?>
//                         <div class= "checkbox">
//                             <label>
//                                 <?= checkbox('supplements', $supplement, $_GET);?>
//                                 <?= $supplement ?> <?= $prix ?>€
//                             </label>
//                         </div>
//                     <?php }?>
//             <button type="submit" class="btn btn-primary">Composez votre glace</button>

//             </form>
//     </div>
// </div>
// <h2>$_GET</h2>
// <pre>
//     <?php dump($_GET);
//     // Afficher l'URL
//     echo $_SERVER['REQUEST_URI']; ?>

// </pre>

// <h2>$_POST</h2>
//     <?php dump($_POST) ?>
// <?php -->
require 'footer.php';
