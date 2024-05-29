<?php if (isset($_COOKIE["id"])){
    header('Location: ./discussions.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php require_once("../includes/menubar.php") ?>
    
    <div class="auth-cover-form">
        <form action="/brief/processing/authentication.php" method="post">

            <h1 class="text-center">S'inscrire</h1>

            <p class="text-center">Renseignez les informations liées au compte que vous êtes sue le point de créer.</p>

            <?php if (isset($_GET["email"]) && $_GET["email"] == "error") { ?>
                <div class="alert-error">
                    Email invalide ou déjà utilisé.
                </div>
            <?php } ?>

            <?php if (isset($_GET["password"]) && $_GET["password"] == "error") { ?>
                <div class="alert-error">
                    les deux mots de passe saisis ne sont pas identiques.
                </div>
            <?php } ?>

            <input type="hidden" name="source" value="register">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Saisir l'e-mail ici ..." name="email" id="email" require minlength="6" maxlength="50">
            <br /><br />

            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Saisir le mot de passe ici ..." name="password" id="password" require minlength="6" maxlength="50">
            <br /><br />

            <label for="confirm_password">Confirmer mot de passe</label>
            <input type="confirm_password" placeholder="Comfirmer le mot de passe ici ..." name="confirm_password" id="confirm_password" require minlength="6" maxlength="50">
            <br /><br />

            <button class="button w-100">
                S'inscrire
            </button>

            <p>
                Déjà inscrit(e), <a href="/brief">connectez-vous.</a>
            </p>
        </form>
    </div>
</body>
</html>