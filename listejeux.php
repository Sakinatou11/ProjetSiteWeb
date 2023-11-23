
<!DOCTYPE html>

<html>
<head>
    <title>Liste des jeux vidéo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Liste des jeux vidéo</h1>

        <!-- Catégories -->
        <div class="mb-4">
            <a href="?categorie=sport" class="btn btn-primary">Sport</a>
            <a href="?categorie=combat" class="btn btn-primary">Combat</a>
            <a href="?categorie=course" class="btn btn-primary">Course</a>
        </div>
        
        <!-- Jeux vidéo -->
        <div class="row">
            <?php
            include 'header.inc.php';
            $jeux = [
                [
                    'nom' => 'FIFA 21',
                    'categorie' => 'sport',
                    'image' => 'fifa21.jpg',
                    'description' => 'Jouez au célèbre jeu de football FIFA 21.'
                ],
                [
                    'nom' => 'Street Fighter V',
                    'categorie' => 'combat',
                    'image' => 'streetfighter5.jpg',
                    'description' => 'Affrontez vos adversaires dans le jeu de combat Street Fighter V.'
                ],
                [
                    'nom' => 'Need for Speed: Heat',
                    'categorie' => 'course',
                    'image' => 'nfsheat.jpg',
                    'description' => 'Pilotez des voitures rapides dans le jeu de course Need for Speed: Heat.'
                ]
            ];

            // Filtrer les jeux en fonction de la catégorie sélectionnée
            $filteredJeux = [];
            $categorie = $_GET['categorie'] ?? null;

            if ($categorie) {
                foreach ($jeux as $jeu) {
                    if ($jeu['categorie'] === $categorie) {
                        $filteredJeux[] = $jeu;
                    }
                }
            } else {
                $filteredJeux = $jeux;
            }

            // Afficher les jeux filtrés
            foreach ($filteredJeux as $jeu) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://www.bing.com/images/search?view=detailV2&ccid=tseETxgE&id=AE8E92F0BAA706A09265965422943294DEAC2B45&thid=OIP.tseETxgEUu8JtTaZPQsERAHaEK&mediaurl=https%3a%2f%2fgame-experience.it%2fwp-content%2fuploads%2f2020%2f11%2ffifa-21-1.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.b6c7844f180452ef09b536993d0b0444%3frik%3dRSus3pQylCJUlg%26pid%3dImgRaw%26r%3d0&exph=720&expw=1280&q=fifa21&simid=608025232038047014&FORM=IRPRST&ck=A43BE2AC907BE2F2F8E0ACEF9751A362&selectedIndex=11' . $jeu['image'] . '" class="card-img-top" alt="' . $jeu['nom'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $jeu['nom'] . '</h5>
                            <p class="card-text">' . $jeu['description'] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    <?php
    include 'footer.inc.php';
?>