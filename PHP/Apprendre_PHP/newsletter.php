<?php

require 'elements/header.php';
$error = null;
$success = null;
$email = null;
if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $file = __DIR__.DIRECTORY_SEPARATOR."emails" .DIRECTORY_SEPARATOR. date("Y m j");
    file_put_contents($file, $email .PHP_EOL ,FILE_APPEND);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $success = "Votre email a bien été enregistré";
        $email = null;
    }else{
        $error = "Email invalide";
    }

}
?>
<h1>S'inscrire à la newsletter</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus architecto sunt maiores suscipit quasi dicta nihil totam voluptates magnam dignissimos reiciendis nesciunt, ut quidem libero incidunt maxime repudiandae officia voluptatibus.</p>

<?php
if($error):?>
    <div class="alert alert-danger">
        <?=$error ?>
    </div>
<?php endif ?>
<?php
if($success):?>
    <div class="alert alert-success">
        <?=$success ?>
    </div>
<?php endif ?>

<form action="newsletter.php" method = "POST" class="form-inline" >
        <input type="email" class="form-control" name="email" placeholder= "Entrez votre email" required value="<?=htmlentities($email)?>">
        <button type="submit" class="btn btn-primary " >S'inscrire</button>
    </div> 
 
  

</form>
 
