<?php
include'header.inc.php';
include'menu.inc.php';

// Connexion à la base de données
require_once("param.inc.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);


// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Récupération des informations du formulaire
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour vérifier si l'utilisateur existe
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$password'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur existe, vous pouvez faire les actions nécessaires ici (par exemple, redirection vers une page après connexion réussie)
        echo "Connexion réussie !";
        header('Location: jeux.php');
        exit();
    } else {
        // L'utilisateur n'existe pas ou ses identifiants sont incorrects
        echo "Identifiants incorrects !";
        header('Location: login.php');
        exit();
    }
}

// Fermer la connexion à la base de données
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<body>

<h2>Formulaire de connexion</h2>

<form method="post" action="">
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>

  <label for="password">Mot de passe:</label><br>
  <input type="password" id="password" name="password"><br><br>

  <input type="submit" name="submit" value="Se connecter">
</form>

</body>
</html>