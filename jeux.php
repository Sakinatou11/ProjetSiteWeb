<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Utilisateur non connecté, redirigez-le vers la page d'accueil
    header("Location: index.php");
    exit();
}

?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <main style="text-align: center;">
  <h1 class="couleur">Plus de cent jeux et des parties de feu ! </h1>
        
    </main>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://tse3.mm.bing.net/th?id=OIP.BOx23m7XBNVhytnrVUH1EQHaEK&pid=Api&P=0&h=180" alt="Fast and Furious" class="img-fluid"></a>
                    <h3><a href="connexion.php">Fast and Furious</a></h3>
                    <p>Catégorie: Course</p>
                    <p>Description: Jeu de course passionnant avec des voitures rapides.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class "jeu">
                    <a href="connexion.php"><img src="https://tse4.mm.bing.net/th?id=OIP.Me4-xBpjsIhYfLBhaHDcnQHaDg&pid=Api&P=0&h=180" alt="Twilight" class="img-fluid"></a>
                    <h3><a href="connexion.php">Twilight</a></h3>
                    <p>Catégorie: Stratégie</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://tse2.mm.bing.net/th?id=OIP.uFtfhe_tyHP_Nay1GaoBSQHaGv&pid=Api&P=0&h=180" alt="Super Mario" class="img-fluid"></a>
                    <h3><a href="connexion.php">Mario Kart</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://gaming-cdn.com/images/products/8552/616x353/total-war-rome-remastered-remastered-edition-pc-mac-jeu-steam-cover.jpg?v=1652774815" alt="Total War" class="img-fluid"></a>
                    <h3><a href="connexion.php">Total War</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://gaming-cdn.com/images/products/12953/screenshot/marvel-s-spider-man-miles-morales-pc-jeu-steam-wallpaper-4-thumbv2.jpg?v=1695136231" alt="Spider Man" class="img-fluid"></a>
                    <h3><a href="connexion.php">Spider Man</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://tse3.mm.bing.net/th?id=OIP.3lBkYZswoCHKw-cHEUCy6AHaHa&pid=Api&P=0&h=180" alt="Doctor Strange" class="img-fluid"></a>
                    <h3><a href="connexion.php">Doctor Strange</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://tse4.mm.bing.net/th?id=OIP.i3hCbTBJl1WAyzbFwVpNCQHaEK&pid=Api&P=0&h=180" alt="Total War" class="img-fluid"></a>
                    <h3><a href="connexion.php">GTA</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jeu">
                    <a href="connexion.php"><img src="https://tse3.mm.bing.net/th?id=OIP.3p9blEOyaDjfhomAFPK3-gHaEK&pid=Api&P=0&h=180" alt="UBOOT" class="img-fluid"></a>
                    <h3><a href="connexion.php">UBOOT</a></h3>
                    <p>Catégorie: Aventure</p>
                    <p>Description: Jeu de stratégie amusant où vous défendez votre jardin contre des zombies.</p>
                </div>
            </div>
            
            <p id="lets-play"><a href="connexion.php">Connectez vous pour en savoir plus !</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>