<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom de votre site</title>
    <link rel="stylesheet" type="text/css" href="model.css">
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.getElementById("welcome-text").style.display = "block";
            }, 2000); // Déclenche l'affichage après 2 secondes (2000 millisecondes)
        });
    </script>
</head>
<body>
    <?php include("header.inc.php"); ?>
    <?php include("menu.inc.php"); ?>
    
    <main>
        <!-- Contenu de la page d'accueil -->
		<h1 class="italique" id="lets-play">LET'S PLAY</h1>
		<p id="welcome-text" style="display: none;">Ceci est la page d'accueil de notre site web.</p>
    </main>
    
    <?php include("footer.inc.php"); ?>
</body>
</html>
