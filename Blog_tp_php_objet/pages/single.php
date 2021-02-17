<?php

use App\App;
use App\Tables\Article;
use App\Tables\Categorie;

$post = Article::find($_GET['id']);
if($post === false){
    App::notFound();
}
App::setTitle($post -> title);

$categorie = Categorie::find($post -> category_id);

?>

<h1><?= $post->title ?></h1>

<p><em><?=$categorie -> category_name?></em></p>

<p><?= $post->content ?></p>