<?php
require 'vendor/autoload.php';
use App\Guestbook\{
    Message,
	GuestBook
};


$errors = null;
$success = false;
$guestbook = new GuestBook( __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'messages');
//Verifie si formulaire rempli

if(isset($_POST['username'], $_POST['message'])){
	$message = new Message($_POST['username'],$_POST['message']);
	//si rempli on verifie si message valide
	if($message -> isValid()){
		$guestbook->addMessage($message);
		$success = true;
		$_POST =[];
	}else{
		$errors = $message->getErrors();
	}
}
$messages = $guestbook->getMessages();
$title = "Livre d'or";
require "elements/header.php";
?>
<div class="container" >
	<h1>Livre d'or</h1>
	<?php
	if(!empty($errors)):?>
		<div class="alert alert-danger">
			Formulaire invalide
		</div>
	<?php endif ?>
	<?php
	if($success):?>
		<div class="alert alert-succes">
			Merci pour votre message !
		</div>
	<?php endif ?>
	<form action="" method="post">
		<div class="form-group">
			<input type="text" name="username" placeholder="Entrez votre pseudo"class="form-control <?= isset($errors['username'])?'is-invalid':''?>" value="<?= !empty($_POST['username'])?htmlentities($_POST['username']):''?>">
			<?php if(isset($errors['username'])):?>
				<div class="invalid-feedback">
					<?= $errors['username']?>
				</div>
			<?php endif ?>

		<div class="form-group">
			<textarea name="message" placeholder = "Votre message" class="form-control <?= isset($errors['message'])?'is-invalid':''?>" value="<?= !empty ($_POST['message'])? htmlentities($_POST['message']):''?>"></textarea>
<?php if(isset($errors['message'])):?>
				<div class="invalid-feedback">
					<?= $errors['message']?>
				</div>
			<?php endif ?>
		</div>

		<button class="btn-primary">Envoyer</button>

	</form>
	<?php if(!empty($messages)):?>
	<h1 class="mt-4">Vos messages</h1>
	<?php foreach ($messages as $message): ?>
		<?= $message->toHTML(); ?>
	<?php endforeach ?>

	<?php endif ?>

</div>



<?php "elements/footer.php"; ?>