<?php
  session_start();
  include 'header.inc.php';
  include 'menu.inc.php';
  // Connexion :

  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) 
  {
  die("Échec de la connexion à la base de données : " . $mysqli->connect_error);
  }

  // Numéro du membre qui se trouve dans la table user de notre base de données
 $userid=22;

  // Requête pour récupérer la liste des jeux du membre
  $sql = "SELECT * FROM historic WHERE id_user = $userid";

$result = $mysqli->query($sql);




if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
        echo " Jeu : " . htmlspecialchars($row["Description"]). "<br>";
        echo "Date jouer : " . $row["date_jouer"] . "<br>";

    }
} else {
  echo "Aucun jeu trouvé .";
}

// Fermeture de la connexion à la base de données
$mysqli->close();

include'footer.inc.php';
?>