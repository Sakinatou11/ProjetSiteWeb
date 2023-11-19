<?php
  session_start(); // Pour les massages

  // Contenu du formulaire :
  $souhait =  htmlentities($_POST['souhait']);

    

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  if ($stmt = $mysqli->prepare("INSERT INTO souhait(id_souhait, id_user, souhait) VALUES (?, ?, ?)")) {
    
    $stmt->bind_param("iis",$id_souhait,$id_user, $souhait);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement réussi";

    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
    }
  }
  // Redirection vers la page d'accueil :
  header('Location: jeux.php');
?>