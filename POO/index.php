<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 22/02/2018
 * Time: 10:04
 */
require 'class/Autoloader.php';
\Tutoriel\Autoloader::register();


//$form = new Form(array(
//    'username'=>'Roger',
//    'name' => 'Federer',
//    'password' => '1234'
//));
//    var_dump($form->getData());
//    die();

$form = new Tutoriel\HTML\BootstrapForm($_POST);
?>
    <form action="#" methode="POST">
        <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

    ?>

    </form>

</body>

</html>