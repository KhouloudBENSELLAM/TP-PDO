<?php
require("connexion.php");
$id=$_GET['ident'];
$requete=$connexion->prepare("SELECT * FROM etudiant WHERE ident=?");
$requete->execute(array($id));
$ligne=$requete->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="modifierAction.php">
        ID: <br> <input type="text" name="ident" id="" value="<?php echo $ligne['ident'];?>" readonly> <br>
        NOM: <br> <input type="text" name="nom" id="" value="<?php echo $ligne['nom'];?>"> <br>
        Email: <br> <input type="text" name="email" id="" value="<?php echo $ligne['email'];?>"> <br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>