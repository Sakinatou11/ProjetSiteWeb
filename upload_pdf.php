<?php
if(isset($_POST['submit'])){
    require_once("param.inc.php");
    $mysqli = new mysqli($host, $login,$passwd, $dbname);
    $req=$mysqli->prepare("insert into game_rules(name,size,type,bin) values(?,?,?,?)");
    $req->execute(array($_FILES["regle"]["name"],$_FILES["regle"]["size"],$_FILES[
    "regle"]["type"],file_get_contents($_FILES["regle"]["tmp_name"])));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Télécharger un ficher pdf</title>
</head>
<body>
    <h2>Télécharger un fichier pdf</h2>
    <form name="fo" method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="regle" /> /><br />
        <input type="submit" name="submit" value="Télécharger" />
    </form>
</body>
</html>