
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Effectuez la vérification des informations d'identification ici.

    if (/* Vérifiez si les informations d'identification sont correctes */) {
        // Authentification réussie, redirigez l'utilisateur vers la page d'accueil par exemple.
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Informations d'identification incorrectes. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de Connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.inc.php'; ?>
    <?php include 'menu.inc.php'; ?>

    <div class="login-container">
        <h2>Connexion</h2>
        <form method="post" action="login.php">
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
        <?php
        if (isset($error_message)) {
            echo '<p class="error">' . $error_message . '</p>';
        }
        ?>
    </div>
</body>
</html>
