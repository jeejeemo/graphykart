<?php

$pdo = new PDO("mysql:dbname=tutophp;host=localhost", "root", "",[
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$error = null;
$success = null;


try{
	if(isset($_POST['name'], $_POST['content'])){
		$query = $pdo -> prepare ('UPDATE posts SET name = :name, content= :content WHERE id= :id');
		$query ->execute (
			[
				'name' => $_POST['name'],
				'content' => $_POST['content'],
				'id'       => $_GET['id']
			]
		);
		$success = "Votre article à bien été modifié";

	}
		$query = $pdo ->prepare('SELECT * FROM posts WHERE id = :id');
		$query -> execute(
			[
				'id' => $_GET['id']
			]
		);
		$post = $query ->fetch();

}catch (PDOException $e){
	$error = $e ->getMessage();
}
require './elements/header.php';?>
<div class="container">
	<a href="../tp_livre_or/index.php">Retour</a>
	<?php
	if($success):?>
	<div class="alert alert-success"><?=$success?></div>
	<?php endif?>

	<?php if($error):?>
	<div class="alert-danger"><?= $error ?></div>
	<?php else:?>
	<ul>
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" name= "name" value="<?=htmlentities ($post->name)?>">
			</div>
			<div class="form-group">
				<textarea class="form-control" name= "content" ><?=htmlentities ($post->content)?></textarea>
			</div>
			<button type="submit" class="btn-bd-primary">Sauvegarder</button>
		</form>
	</ul>

</div>
<?php endif; ?>
