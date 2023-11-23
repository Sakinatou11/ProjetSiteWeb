<?php
if(isset($_POST['submit'])){
    require_once("param.inc.php");
    $mysqli = new mysqli($host, $login,$passwd, $dbname);
    $req=$mysqli->prepare("insert into pictures(name,size,type,bin) values(?,?,?,?)");
    $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES[
    "image"]["type"],file_get_contents($_FILES["image"]["tmp_name"])));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Télécharger une image</title>
</head>
<body>
    <h2>Télécharger une image</h2>
    <form name="fo" method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="image" /> /><br />
        <input type="submit" name="submit" value="Télécharger" />
    </form>
</body>
</html>