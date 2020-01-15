<?php
require 'functions.php';
$date = new DateTime('2019-01-14');
$intervale = new DateInterval('P2Y1M20DT10H');
$date -> add($intervale);
var_dump($date);


// $date1 = '2015-01-20';
// $date2 = '2019-02-10';
// $d1 = new DateTime($date1);
// $d2 = new DateTime($date2);


// $diff = $d1 -> diff($d2, true);

// $date = new DateTime();
// $date -> modify('+1 month');
// echo $date -> format('d-m-Y');

// $time1 = strtotime($date1);
// $time2 =strtotime($date2);
// $days = floor(abs($time1 - $time2)/(24*60*60));
// echo "Il y a {$diff ->y} années {$diff ->m} mois et {$diff ->d} jours entre les 2 dates";