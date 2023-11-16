
<!DOCTYPE html>
<?php
    session_start();
    include 'header.inc.php';
    include 'menu.inc.php';
    ?>
<html>
<head>
   <title>Informations - Let'sPlay</title>
</head>
<body>
   <?php

      // Récupérer les informations de votre site
      $nom = "Let'sPlay";
  

      // Afficher les informations sur la page
      echo "<h1>Informations sur $nom</h1>";;
      echo "<p>Let's play est un site de jeux gratuit en ligne  basé et créer à Rouen en 2023.</p>";
      echo "<p>Il a été créer  afin de permettre aux membres de choisir les jeux de plateau </p>";
      echo "<p>auxquels ils souhaitent jouer, ainsi que les dates où ils vont se rencontrer.</p>";

      
      include'footer.inc.php';
   ?>
</body>
</html>
