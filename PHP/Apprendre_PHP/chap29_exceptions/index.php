<?php

if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php else : ?>

    <div class="container">
        <ul>
            <li><?= "En ce moment " . $today['description'] . " il fait " . $today['temp'] ?> °C</li>

            <?php foreach ($forecast as $day) : ?>
                <li><?= "Le " . $day['date']->format('d:m:Y à h:i') . " le temps sera " . $day['description'] . " et il fera " . $day['temp'] ?></li>
            <?php endforeach; ?>

        </ul>
    </div>
<?php endif ?>

<?php