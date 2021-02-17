
<?php require 'functions.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <title>Formulaire d'identification</title>
</head>

<body>
    <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
        <fieldset>
            <legend>Identifiant</legend>
            <p>
                <label for="login">Login :</label>
                <input type="text" name="login" id="login" value="<?php if (!empty($_POST['login'])) {
                                                                        echo htmlspecialchars($_POST['login'], ENT_QUOTES);
                                                                    } ?>" />
            </p>
            <p>
                <label for="password">Mot de passe :</label>
                <input type="password" name="motDePasse" id="password" value="" />
                <input type="submit" name="submit" value="Identification" />
            </p>
        </fieldset>
    </form>
</body>

</html>