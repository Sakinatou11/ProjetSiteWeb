<?php
session_start();

$serveur = "moduleweb.esigelec.fr";
$utilisateur = "grp_6_1";
$mot_de_passe = "mFe7yhBQN5kO";
$baseDeDonnees = "bdd_6_1";

$mysqli = new mysqli($serveur, $utilisateur, $mot_de_passe, $baseDeDonnees);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mail']) && isset($_POST['mot_de_passe'])) {
        $stmt = $mysqli->prepare("SELECT * FROM user WHERE mail = ? AND mot_de_passe = ?");
        $stmt->bind_param('ss', $_POST['mail'], $_POST['mot_de_passe']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: jeux.php");
            exit();
        } else {
            $errorMessage = 'Les identifiants sont incorrects.';
        }
    }
}

if (isset($_SESSION['user_id'])) {
    header("Location: jeux.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ... (votre contenu existant) ... -->
</head>
<body>
    <?php include("header.inc.php"); ?>
    <?php include("menu.inc.php"); ?>
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
        <p id="lets-play"><a href="inscription.php">Si vous êtes nouveau, inscrivez-vous ici !</a></p>
    </div>
    <?php include 'footer.inc.php'; ?>
</body>
</html>