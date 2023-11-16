
<!DOCTYPE html>
<?php
    session_start();
    include 'header.inc.php';
    include 'menu.inc.php';
    ?>
<html>
<head>
   <title>Contact - Let'sPlay</title>
</head>
<body>
   <?php

      // Récupérer les informations de votre site
      $nom = "Let'sPlay";
      $addresse = "76800 Saint Etienne du Rouvray";
   
      $email = "contact@letsplay.com";
      $telephone = "+0601000000";

      // Afficher les informations sur la page
      echo "<h2>Contact :</h2>";
      echo "<p>Email : $email <br> Téléphone : $telephone <br> Addresse : $addresse</p>";
      
      include'footer.inc.php';
   ?>
</body>
</html>
   ?>
</body>
</html>
