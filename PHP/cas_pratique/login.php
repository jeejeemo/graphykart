<?php
require_once 'fonctions/auth.php';

$erreur = null;
$password = '$2y$12$u/3ddwX63o2Yd8F/JgWE/uekFK0M86q51nYDugRDFW5OgpB7iFFyK';
if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
	if ($_POST['pseudo']==='jeanmo66' && password_verify($_POST['mdp'], $password)){
	session_start();
	$_SESSION['connecte'] = 1;
	header('Location: dashboard.php');
	exit();
	}
	else{
		$erreur ='identifiant ou mot de passe incorrect';
	}
}
require_once 'elements/header.php';
if (est_connecté()){
	header('Location: dashboard.php');
	exit();
}
?>

<?php if($erreur): ?>
<div class="alert alert-danger">
	<?=$erreur; ?>
</div>
<?php endif ?>

<form action="" method="post">
	<div class="form-group">
		<input type="text" class="form-control" name="pseudo" placeholder="nom d'utilisateur">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe">
	</div>
	<button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require 'elements/footer.php'; ?>
