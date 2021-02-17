<?php
$name = null;
if(!empty($_GET['action'] && $_GET['action']==='deconnecter' )){
	unset($_COOKIE['user']);
	setcookie('user','',time()-10);
}
if(!empty($_COOKIE['user'])){
    $name = $_COOKIE['user'];
}

if(!empty($_POST['name'])){
    setcookie('user',$_POST['name']);
    $name = $_POST['name'];
}
require 'elements/header.php';
if(!empty($name)):?>
    <h1>Bonjour <?=htmlentities($name) ?></h1>
    <a href="profil.php?action=deconnecter"  >Se déconnecter</a>
    <?php else:?>
    <form action="" method="post" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="name" placeholder="Entrez votre nom">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Se connecter</button>
    </form>

<?php endif;?>



<?php
require 'elements/footer.php';
