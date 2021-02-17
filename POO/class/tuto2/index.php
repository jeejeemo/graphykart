<?php
//namespace Tutoriel1;

//require 'Personnage.php';

//require 'Archer.php';

// require 'class/Autoloader.php';

// Autoloader::register();

// $merlin = new Personnage("Merlin");
// $harry = new Personnage("Harry");


//$harry = new Personnage("Harry");
//
//$merlin->regenerer();
//
////echo $merlin -> getAtk();
//$merlin->regenerer(100);



require 'Form.php';
$form = new Form($_POST);
var_dump($form);
?>

<form action="#" method="post">
<?php
	echo $form ->input('username');
	echo $form ->input('firstname');
	echo $form ->input('password');
	echo $form -> submit();
	?>
</form>
<?php

//$text = new Text();
//$text = $text->whithZero(5);
//var_dump($text);
//require 'Text.php';
//	var_dump(Text::whithZero(10));




