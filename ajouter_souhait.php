<?php
session_start(); // Démarrer la session pour obtenir l'ID de l'utilisateur connecté

$db_host = "localhost";
$db_name = "sophie";
$db_user = "root";
$db_pass = "";

try {
    // Se connecter à la base de données
    $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    exit;
}

if (isset($_POST['souhait']) && !empty($_POST['souhait'])) {
    $souhait = $_POST['souhait'];
    $id_user = $_SESSION['id_user']; // Récupérer l'ID de l'utilisateur connecté depuis la session

    try {
        // Préparer la requête d'insertion du souhait dans la table "souhait"
        $query = $db->prepare("INSERT INTO souhait (id_user, souhait) VALUES (:id_user, :souhait)");
        $query->bindParam(':id_user', $id_user);
        $query->bindParam(':souhait', $souhait);
        $query->execute();

        echo "Le souhait a été ajouté avec succès!";
    } catch(PDOException $e) {
        echo "Erreur lors de l'insertion du souhait: " . $e->getMessage();
    }
}
header('Location: jeux.php');
?>