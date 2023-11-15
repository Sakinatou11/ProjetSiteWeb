<?php
session_start();

// Établir la connexion à la base de données (utilisez votre propre code de connexion)
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$baseDeDonnees = "bdb_6_1";

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Traitement du formulaire de commentaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['']) && isset($_POST['commentaire'])) {
        $pseudo = $_POST['pseudo'];
        $commentaire = $_POST['commentaire'];

        // Utilisation d'une requête préparée pour éviter l'injection SQL
        $requete = $connexion->prepare("INSERT INTO commentaires (pseudo, commentaire) VALUES (?, ?)");
        $requete->bind_param("ss", $pseudo, $commentaire);
       
        // Exécution de la requête
        if ($requete->execute()) {
            echo "Commentaire ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout du commentaire : " . $requete->error;
        }

        // Fermeture de la requête
        $requete->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Commentaires</title>
</head>
<body>

<h2>Ajouter un commentaire</h2>

<form method="post" action="commentaire.php">
    <label for="pseudo">Pseudo:</label>
    <input type="text" name="pseudo" required><br>

    <label for="commentaire">Commentaire:</label>
    <textarea name="commentaire" rows="4" required></textarea><br>

    <input type="submit" value="Ajouter le commentaire">
</form>

</body>
</html>
