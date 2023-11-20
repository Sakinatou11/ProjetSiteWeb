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

// Récupérer les membres inscrits à la partie à venir
$partie_id = 563; // ID de la partie à venir

$sql = "SELECT * FROM partie_a_venir WHERE id_partie = $partie_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher la liste des membres inscrits
    echo "<h2>Liste des membres inscrits à la partie :</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>"   . $row["nom_jeu"] . "<p>";
        echo "<p>Nom : "  . $row["prenom_joueur"] . "<p>";
        echo "<p>Prénom : "  . $row["nom_joueur"] . "<p>";
        echo "<p>Début : "  . $row["date"] . "<p>";
    }
    echo "</ul>";
} else {
    echo "Aucun membre inscrit à la partie.";
}

// Fermer la connexion à la base de données
$conn->close();
include 'footer.inc.php'
?>