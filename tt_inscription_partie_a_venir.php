<?php
session_start();
$titre = "Inscription";
include 'header.inc.php';
include 'menu.inc.php';

// Vérifier si l'utilisateur est déjà inscrit
if (isset($_SESSION['id_partie'])) {
    $nom = $_POST['nom_joueur'];
    $prenom = $_POST['prenom_joueur'];

    // Connexion à la base de données
    // Connexion :
    require_once("param.inc.php");
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);

    // Vérifier si le membre est déjà inscrit
    $requete = $connexion->prepare('SELECT * FROM partie_a_venir WHERE nom_joueur = ? AND prenom_joueur = ?');
    $requete->execute([$nom, $prenom]);
    $resultat = $requete->rowCount();

    if ($resultat > 0) {
        // Membre déjà inscrit, afficher un message d'erreur
        echo "Vous êtes déjà inscrit à cette partie.";
    } else {
        // Ajouter le membre à la table "partie_a_venir"
        $requete = $connexion->prepare('INSERT INTO partie_a_venir (nom_joueur, prenom_joueur, nom_jeu) VALUES (?, ?, ?)');
        $requete->execute([$nom, $prenom, $_POST['jeu']]);
        echo "Vous avez été inscrit avec succès à la partie.";
    }
}
?>

<div class="container">
    <h1>S'inscrire pour la partie</h1>
    <form  method="POST" action="liste_membre_inscrit.php">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control " id="nom" name="nom" placeholder="Votre nom..." required>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Votre prénom..." required>
                </div>
                <div class="col-md-6">
                    <label for="jeu" class="form-label">Pour quel jeu souhaitez-vous vous inscrire?</label>
                    <input type="text" class="form-control " id="jeu" name="jeu" placeholder="Saisissez le nom du jeu pour lequel vous voulez vous inscrire..." required>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-outline-primary" type="submit">Inscription</button>
                </div>   
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.inc.php';
?>