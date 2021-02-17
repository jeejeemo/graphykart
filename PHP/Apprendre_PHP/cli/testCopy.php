<?php
/**En POO */
$date = new DateTime();
$date->modify('+1 month');
echo $date->format('d/m/Y');
echo "\n";

/**En procédural */
$time = time();

var_dump($time);
echo "\n";
echo date('d/m/Y', $time);
 