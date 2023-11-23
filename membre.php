<?php
    include 'header.inc.php';
    include 'menu.inc.php';
  

// Classe représentant les membres
class Membre {
  public $nom;
  public $prenom;
  
  // Constructeur pour créer un nouveau membre
  public function __construct($nom, $prenom) {
    $this->nom = $nom;
    $this->prenom = $prenom;
  }
}

// Liste des membres déjà inscrits
$membresInscrits = array(
  new Membre("Doe", "John"),
  new Membre("Smith", "Jane")
);

// Classe représentant une partie de jeu
class Partie {
  public $image;
  public $description;
  
  // Constructeur pour créer une nouvelle partie
  public function __construct($image, $description) {
    $this->image = $image;
    $this->description = $description;
  }
}

// Chemin de l'image


echo '<img src="GTA.jpg" alt="GTA">';
// Description de la partie
echo "<p>Partie à venir</p>";
$descriptionPartie = "Partie de jeu à venir.";

// Création de la partie avec l'image et la description




// Affichage de la liste des membres inscrits
echo "<h3>Membres inscrits:</h3>";
echo "<ul>";
foreach ($membresInscrits as $membre) {
  echo "<li>" . $membre->prenom . " " . $membre->nom . "</li>";
}
echo "</ul>";

// Formulaire d'inscription pour un nouveau membre
echo "<h3>Inscription:</h3>";
echo "<form method='post' action='jeux.php'>";
echo "<input type='submit' value='Sign Up'>";
echo "</form>";


include 'footer.inc.php';

?>
