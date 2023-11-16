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
$_SESSION['mail'] = htmlentities($_POST['mail']);
$password = htmlentities($_POST['mot_de_passe']);

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }


  
if ($stmt = $mysqli->prepare("SELECT mot_de_passe, role FROM user WHERE mail=? limit 1")) 
{
 
  $stmt->bind_param("s", $_SESSION['mail']);
  $stmt->execute();
  $result = $stmt->get_result();   

  if($result->num_rows > 0) 
  {     
      $row = $result->fetch_assoc(); 
          if (password_verify($password,$row["mot_de_passe"])) 
          {
                // Redirection vers la page admin.php ou autres pages en fonction du role (tuteur,admin, etc.);
              if($row["role"]==1){
                
                $_SESSION['message'] = "Authentification réussi pour un admin.";
                header('Location: jeux.php'); // redirection vers la page membre
              }
              if($row["role"]==2)
              {
                
                $_SESSION['message'] = "Authentification réussi pour un membre.";
              header('Location: jeux.php'); // redirection vers la page membre
            }          
          
            }else { 
              // Redirection vers la page d'authetification connexion.php
              
              $_SESSION['message'] = "Username or Password Incorrect";
              header('Location: connexion.php');
              
            }    
      
  }else{
      
    $_SESSION['message'] = "Identifiant Innexistant";
       header('Location: connexion.php');
      }
  }

?>