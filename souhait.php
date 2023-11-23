<?php
session_start();
include 'header.inc.php';
include 'menu.inc.php';
// Démarrer la session pour obtenir l'ID de l'utilisateur connecté

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
}
?>
<div class="container">
<h1>Faites votre souhait</h1>
<form  method="POST" action="ajouter_souhait.php">
    <div class="container">
    <div class="row my-3">
        <div class="col-md-6">
            <label for="souhait" class="form-label">Souhait</label>
            <input type="text" class="form-control " id="souhait" name="souhait" placeholder="Votre souhait..." required>
        </div>
        <div class="col-md-6">
        </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Ajouter</button></div>   
        </div>
    </div>
</form>
</div>
<?php
include 'footer.inc.php';
?>