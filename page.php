<?php
    session_start();
    $titre = "List of games...";
    include 'header.inc.php';
    include 'menu.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Jeux</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .game-card {
      margin-bottom: 20px;
      text-align: center;
    }
    .game-card img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="mt-5">Jeux disponibles</h1>

    <div class="row">
      <?php 
      // Tableau de jeux (à remplacer par une requête ou une source de données réelle)
      $games = [
        [
          'image' => 'C:\xampp2\htdocs\Letsplay\My BFF Weeding.jpeg',
          'description' => 'Description du jeu 1'
        ],
        [
          'image' => 'C:\xampp2\htdocs\Letsplay\Penalty Shooter.jpeg',
          'description' => 'Description du jeu 2'
        ],
        [
          'image' => 'C:\xampp2\htdocs\Letsplay\Street Fighter.jpeg',
          'description' => 'Description du jeu 3'
        ],
        ];
      foreach ($games as $game) {
        echo '<div class="col-md-4">';
        echo '<div class="game-card">';
        echo '<img src="' . $game['image'] . '" alt="Jeu">';
        echo '<p>' . $game['description'] . '</p>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    include 'footer.inc.php';
?>