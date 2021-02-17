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

use Tuto\Autoloader;
use Tuto\HTML\BootstrapForm;

require 'class/Autoloader.php';
Autoloader::register();



$bootstrap = new BootstrapForm($_POST);
//var_dump($bootstrap);?>

<form action="" method="post">
<?php
echo $bootstrap->input('username');
echo $bootstrap->input('password');
echo $bootstrap->submit();
?>
</form>

<?php



// $number = Text::publicWithZero(15);
// echo $number;
?>

    
</body>
</html>


