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
    die("Connexion échouée: " . $conn->connect_error);
}

// Requête pour récupérer les membres inscrits à un jeu
$sql = "SELECT * FROM partie_a_venir";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Affichage des informations des membres inscrits
        echo "Nom du jeu: " . $row["nom_jeu"]. "<br>";
        echo "Nom:  " . $row["nom_joueur"]. "<br>";
        echo "Prénom:  " . $row["prenom_joueur"]. "<br>";
        echo "Date de début: " . $row["date"]. "<br>";
        echo "<br>";
    }
} else {
    echo "Aucun membre inscrit trouvé.";
}
$conn->close();
include 'footer.inc.php';
?>