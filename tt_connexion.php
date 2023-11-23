
<?php
session_start();
/*
$serveur = "moduleweb.esigelec.fr";
$utilisateur = "grp_6_1";
$mot_de_passe = "mFe7yhBQN5kO";
$baseDeDonnees = "bdd_6_1";

$mysqli = new mysqli($serveur, $utilisateur, $mot_de_passe, $baseDeDonnees);

if ($mysqli->connect_error) {
 
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
    . $mysqli->connect_error);
}
*/
$mail = htmlentities($_POST['mail']);
$_SESSION['email'] = $mail;
$password = htmlentities($_POST['mot_de_passe']);

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }


 
if ($stmt = $mysqli->prepare("SELECT * FROM user WHERE mail=? limit 1"))


    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $result = $stmt->get_result();  

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["mot_de_passe"])) {
            if ($row["role"] == 1) {
                // Membre
                $_SESSION['user'] = $row; // Enregistrement de l'utilisateur dans la variable de session
                $_SESSION['message'] = "Authentification réussie pour un membre.";
                header('Location: jeux.php'); // Redirection vers la page membre
            }
            if ($row["role"] == 2) {
                // Admin
                $_SESSION['user'] = $row; // Enregistrement de l'utilisateur dans la variable de session
                $_SESSION['message'] = "Authentification réussie pour un admin.";
                header('Location: pageadmin.php'); // Redirection vers la page d'administration
            }
    }else{
        $_SESSION['message'] = "Identifiant Inexistant";
        header('Location: connexion.php');
    }

   
}
if ($stmt = $mysqli->prepare("SELECT * FROM user WHERE mail IS NULL AND mot_de_passe IS NULL")) {
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Visiteur identifié
        $_SESSION['message'] = "Vous êtes un visiteur. Vous n'avez pas accès.";
        header('Location: index.php'); // Redirection vers une page spécifique pour les visiteurs

        // Mettre à jour le rôle des utilisateurs identifiés comme visiteurs
        $updateStmt = $mysqli->prepare("UPDATE user SET role = 0 WHERE mail IS NULL AND mot_de_passe IS NULL");
        $updateStmt->execute();
    }
}

?>