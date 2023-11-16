<?php
session_start();

$titre = "Connexion";
include 'header.inc.php';
include 'menu.inc.php';

?>

<div class="container">
    <h1>Connexion</h1>
    <div class="login-form">
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="mail">Nom d'utilisateur</label>
                <input type="text" name="mail" id="mail" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
    <p id="lets-play"><a href="inscription.php">If you are new, register now here !</a></p>
</div>

<?php
include 'footer.inc.php';
?>