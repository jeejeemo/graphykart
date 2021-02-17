

<?php

use App\App;
use App\Tables\Article;
use App\Tables\Categorie;

$categorie = Categorie::find($_GET['id']);

if($categorie === false){
    App::notFound();
}

$articles =  Article::lastByCategory($_GET['id']);

$categories = Categorie::all();


?>
<h1><?= $categorie -> category_name ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php

        foreach ($articles as $post) : ?>

            <h2> <a href="<?= $post -> url ?>"> <?= $post ->title; ?> </a></h2>
            <p><em><?= $post -> categories ?></em></p>

            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>

    </div>



    <div class="col-sm-4">
        <ul>
            <?php
            foreach (Categorie::all() as $categorie) : ?>

                <li><a href="<?= $categorie->url; ?>"><?= $categorie->category_name; ?></a></li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>