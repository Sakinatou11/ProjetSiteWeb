<?php
  session_start(); // Pour les massages

  require_once("param.inc.php");
  $serveur = "moduleweb.esigelec.fr";
$utilisateur = "grp_6_1";
$mot_de_passe = "mFe7yhBQN5kO";
$baseDeDonnees = "bdd_6-1";


$mysqli = new mysqli($serveur, $utilisateur, $mot_de_passe, $baseDeDonnees);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, mail, mot_de_passe, role) VALUES (?, ?, ?, ?, ?)")) {
    $mot_de_passe = password_hash($mot_de_passe, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssi", $nom, $prenom, $mail, $mot_de_passe, $role);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement réussi";

    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
    }
  }
  // Redirection vers la page d'accueil par exemple :
  header('Location: index.php');


?>