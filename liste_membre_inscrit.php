<?php
include 'header.inc.php';
include 'menu.inc.php';

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sophie";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}



// Récupération des parties à venir depuis la table partie_a_venir
$query = "SELECT * FROM partie_a_venir";
$stmt = $db->prepare($query);
$stmt->execute();
$parties = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des parties à venir, des membres inscrits et de l'heure de début
foreach ($parties as $partie) {
    echo "Partie : " . $partie['nom_jeu'] . "<br>";
    echo "Heure de début : " . $partie['heure_debut'] . "<br>";
    echo "Membres inscrits :<br>";

    // Récupération des membres inscrits pour chaque partie
    $query = "SELECT nom_joueur, prenom_joueur FROM partie_a_venir WHERE id_partie = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$partie['id_partie']]);
    $membres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($membres)) {
        foreach ($membres as $membre) {
            echo $membre['nom_joueur'] . " " . $membre['prenom_joueur'] . "<br>";
        }
    } else {
        echo "Aucun membre inscrit pour le moment.<br>";
    }

    // Affichage du bouton d'inscription uniquement si le membre n'est pas déjà inscrit
    $query = "SELECT COUNT(*) FROM partie_a_venir WHERE id_partie = ? AND nom_joueur = ? AND prenom_joueur = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$partie['id_partie'], "votre_nom", "votre_prénom"]);
    $count = $stmt->fetchColumn();

    if ($count == 0) {
        echo "<a href='inscription_partie_a_venir.php?id=" . $partie['id_partie'] . "'>S'inscrire</a><br><br>";
    } else {
        echo "Vous êtes déjà inscrit pour cette partie.<br><br>";
    }
}

// Fermer la connexion à la base de données
$conn->close();
include 'footer.inc.php';
?>