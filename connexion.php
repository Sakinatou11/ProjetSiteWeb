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
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
</div>

<?php
include 'footer.inc.php';
?>
