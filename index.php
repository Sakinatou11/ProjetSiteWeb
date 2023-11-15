<?php include_once('login.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste de Jeux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("header.inc.php"); ?>
    <?php include("menu.inc.php"); ?>
    <main style="text-align: center;">
        <!-- Contenu de la page d'accueil -->
        <p id="lets-play">Welcome to LET'S PLAY !</p1>
        <p id="lets-play">Bienvenue sur LET'S PLAY !</p2>
        <p id="lets-play">Dal lein akk Diam si LET'S PLAY !</p3>
        <p id="lets-play">This is the homepage of our beloved website !</p>
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
                    <a href="connexion.php"><img src="https://gaming-cdn.com/img/products/7072/pcover/1400x500/7072.jpg?v=1683557192" alt="Hogwards Legacy" class="img-fluid"></a>
                    <h3><a href="connexion.php">Hogwarts Legacy</a></h3>
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
        </div>
        <main style="text-align: center;">
        <p id="lets-play">Do you want to see more ... ?</p>
        <p id="lets-play"><a href="inscription.php">If you are new, register now here !</a></p>
        </main>
        <!-- Inclusion du formulaire de connexion -->
           

        <h1>Bienvenue sur notre site de jeux vidéo !</h1>

        <!-- Si l'utilisateur existe, on le redirige vers tous les jeux -->
        <?php if(isset($loggedUser)): ?>
            <?php header('Location: jeux.php'); ?>
        <?php else: ?>
            <!-- Si l'utilisateur n'est pas connecté, il ne peut consulter la page de jeux -->
            <p>Connectez-vous pour accéder à tous les jeux.</p>
        <?php endif; ?>
        </div>

        <?php include_once('footer.php'); ?>

        

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuB
    <?php include("footer.inc.php"); ?>

    <body>
    </html>