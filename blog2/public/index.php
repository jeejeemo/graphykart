<?php
require 'vendor/autoload.php';
require '../elements/header.php';

dump ($_SERVER);
if($_SERVER['REQUIEST_URI'] === '/nous-contacter'){
	require '../templates/contact.php';
}
require '../elements/footer.php';
