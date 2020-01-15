<?php
$post = $db->prepare('SELECT * FROM articles WHERE id = ?',[$_GET['id']], 'App\tables\Article' );?>

<h1><?=$post->titre ?></h1>
<p><?=$post->texte ?></p>
