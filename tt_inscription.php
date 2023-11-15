<?php
session_start();

require_once("param.inc.php");

$serveur = "moduleweb.esigelec.fr";
$utilisateur = "grp_6_1";
$mot_de_passe_bd = "mFe7yhBQN5kO";
$baseDeDonnees = "bdd_6_1";

$mysqli = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $baseDeDonnees);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez si toutes les données nécessaires sont présentes dans la requête POST
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mot_de_passe'])) {
        $stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, mail, mot_de_passe, role) VALUES (?, ?, ?, ?, ?)");

        // Utilisez password_hash pour sécuriser le mot de passe
        $options = ['cost' => 12];
        $mot_de_passe_hash = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT, $options);

        // Définissez le rôle comme 1 pour un membre (ajustez si nécessaire)
        $role = 1;

        // Liez les paramètres et exécutez la requête
        $stmt->bind_param("ssssi", $_POST['nom'], $_POST['prenom'], $_POST['mail'], $mot_de_passe_hash, $role);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Enregistrement réussi";
        } else {
            $_SESSION['message'] =  "Impossible d'enregistrer";
        }

        // Redirection vers la page d'accueil par exemple :
        header('Location: index.php');
        exit();
    }
}
?>