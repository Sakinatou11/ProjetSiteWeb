<?php
  session_start(); // Pour les messages

  // Contenu du formulaire :
  $nom =  htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $jeu = htmlentities($_POST['jeu']);


  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Vérifier si l'utilisateur existe déjà
  if ($stmt = $mysqli->prepare("SELECT * FROM partie_a_venir WHERE nom_jeu=? AND nom_joueur=? AND prenom_joueur=?")) {
    $stmt->bind_param("sss",$jeu, $nom, $prenom);
    $stmt->execute();
    $stmt->store_result();
    
    if($stmt->num_rows > 0) {
        $_SESSION['message'] = "Cet utilisateur est déjà inscrit pour ce jeu";
    } else {
        // L'utilisateur n'existe pas encore, enregistrement possible
        if ($stmt = $mysqli->prepare("INSERT INTO partie_a_venir(nom_jeu, nom_joueur, prenom_joueur) VALUES (?,?, ?)")) {
            $stmt->bind_param("sss",$jeu, $nom, $prenom);
            if($stmt->execute()) {
                $_SESSION['message'] = "Enregistrement réussi";
            } else {
                $_SESSION['message'] = "Impossible d'enregistrer";
            }
        }
    }
  } else {
    $_SESSION['message'] = "Erreur lors de la recherche d'utilisateur";
  }
  
  // Redirection vers la page d'accueil ou autre :
  header('Location: liste_membre_inscrit.php');
?>