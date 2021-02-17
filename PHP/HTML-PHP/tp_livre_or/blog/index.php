<?php
require 'class/Post.php';

$pdo = new PDO("mysql:dbname=tutophp;host=localhost", "root", "",[
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$error = null;
try{
$query = $pdo ->query('SELECT * FROM posts');
$posts = $query ->fetchAll(PDO::FETCH_CLASS, 'Post');


if(isset($_POST['name'])&& $_POST['content']){
	$query = $pdo->prepare('INSERT INTO posts (name, content, created_at) VALUES (:name, :content, :created)');
	$query ->execute ([
		'name' => $_POST['name'],
		'content' => $_POST['content'],
		'created' => time ()
	]);
	header('location: edit.php?id='.$pdo ->lastInsertId ());
}
}catch (PDOException $e){
	$error = $e ->getMessage();
}
require 'elements/header.php'?>

<div class="container">
<?php if($error):?>

<?php else:?>

	<div class="alert-danger"><?= $error ?></div>
	<ul>
		<?php foreach ($posts as $post):?>
        <h2><a href="./edit.php?id=<?= $post->id ?>"><?= htmlentities($post -> name) ?></a></h2>
        <p class="small text-muted"><?= $post -> created_at -> format('d/m/Y à H:i')?></p>
            <p>
            <?= htmlentities ($post->getExcerpt()) ?>
            </p>

		<?php endforeach; ?>
	</ul>

	<form action="" method="POST">
		<div class="form-group">
			<input type="text" class="form-control" name= "name" value="">
		</div>
		<div class="form-group">
			<textarea class="form-control" name= "content" ></textarea>
		</div>
		<button type="submit" class="btn-bd-primary">Enregistrer</button>
	</form>
    <?php endif; ?>
</div>
<?php require './elements/footer.php'; ?>



