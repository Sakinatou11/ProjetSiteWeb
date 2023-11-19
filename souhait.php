<?php
    session_start();
    $titre = "Souhait";
    include 'header.inc.php';
    include 'menu.inc.php';
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