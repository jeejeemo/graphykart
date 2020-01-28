<?php
declare(strict_types=1);

require 'class/Openweather.php';
require 'class/APIException.php';
require 'elements/header.php';

$weather = new Openweather('6c6a156824f7eb2fb3e2c0b7b09dbcb9');
$error = null;

try {
    $forecast = $weather -> getForecast('Montpellier,fr');
	$today = $weather -> getToday('Montpellier,fr');

} catch (Exception | Error $e){
    $error = $e ->getMessage();
}

if($error): ?>
<div class="alert alert-danger">
    <?= $error ?>
</div>
<?php else: ?>

<div class="container">
	<ul>
		<li><?= "En ce moment " .$today['description']. " il fait " .$today['temp'] ?> °C</li>

		<?php foreach($forecast as $day):?>
		<li><?= "Le " .$day['date']->format('d:m:Y à h:i'). " le temps sera ".$day['description'] . " et il fera ".$day['temp']?></li>
		<?php endforeach;?>

	</ul>
</div>
<?php endif ?>

<?php
require 'elements/footer.php';
?>