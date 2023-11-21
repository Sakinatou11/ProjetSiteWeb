<?php
    session_start();
    $titre = "Inscription";
    include 'header.inc.php';
    include 'menu.inc.php';
?>
<div class="container">
<h1>S'inscrire pour la partie</h1>
<form  method="POST" action="tt_inscription_partie_a_venir.php">
    <div class="container">
    <div class="row my-3">
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control " id="nom" name="nom" placeholder="Votre nom..." required>
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Votre prénom..." required>
        </div>
        <div class="col-md-6">
            <label for="jeu" class="form-label">Pour quel jeu souhaitez-vous vous inscrire?</label>
            <input type="text" class="form-control " id="jeu" name="jeu" placeholder="Saisissez le nom du jeu pour lequel vous voulez vous inscrire..." required>
        </div>
    </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Inscription</button></div>   
        </div>
    </div>
</form>
</div>
<?php
    include 'footer.inc.php';
?>