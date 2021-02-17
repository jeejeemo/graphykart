<?php
require 'vendor/autoload.php';
use App\Openweather;



$weather = new Openweather('f622ed199e4410f6d19723a6567445ac');
$error = null;

try {
    $forecast = $weather -> getForecast('Montpellier,fr');
	$today = $weather -> getToday('Montpellier,fr');
	

} catch (Exception | Error $e){	
    $error = $e ->getMessage();
}

require 'elements/header.php';
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