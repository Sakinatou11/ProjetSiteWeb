<?php

session_start();

// ... (votre code pour la connexion à la base de données) ...
// Remplacez ces valeurs par les informations de votre base de données
$serveur = "moduleweb.esigelec.fr";
$utilisateur = "grp_6_1";
$mot_de_passe = "mFe7yhBQN5kO";
$baseDeDonnees = "bdd_6-1";

require_once("param.inc.php");
$mysqli = new mysqli($serveur, $utilisateur, $mot_de_passe, $baseDeDonnees);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mail']) && isset($_POST['mot_de_passe'])) {
        // Utilisez des requêtes SQL au lieu de parcourir un tableau simulé
        // Assurez-vous d'utiliser des requêtes préparées pour la sécurité
        $stmt = $mysqli->prepare("SELECT * FROM user WHERE mail = ? AND mot_de_passe = ?");
        $stmt->bind_param('ss', $_POST['mail'], $_POST['mot_de_passe']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            // Connexion réussie, redirigez vers la page des jeux
            $_SESSION['user_id'] = $user['id'];
            header("Location: jeux.php");
            exit();
        } else {
            // Identifiants incorrects
            $errorMessage = 'Les identifiants sont incorrects.';
        }
    }
}

// Si l'utilisateur est déjà connecté, redirigez-le vers la page des jeux
if (isset($_SESSION['user_id'])) {
    header("Location: jeux.php");
    exit();
}
?>

<!-- ... le reste du code HTML reste inchangé ... -->

<?php if (!isset($errorMessage)): ?>
    <!-- ... le formulaire HTML ... -->
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
    </div>
<?php endif; ?>
