<div class="row">
    <div class="col-sm-8">
        <?php

        

        foreach (\App\tables\Article::getLast() as $post) : ?>


            <h2> <?= $post->title; ?> </h2>
            <p><em><?= $post->categories ?></em></p>

            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>

    </div>



    <div class="col-sm-4">
        <ul>
            <?php
            foreach (App\tables\Categorie::all() as $categorie) : ?>

                <li><a href="<?= $categorie->url; ?>"><?= $categorie->category_name; ?></a></li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>