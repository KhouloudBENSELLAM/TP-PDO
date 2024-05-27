<?php
    require("connexion.php");
    $requete=$connexion->prepare("UPDATE etudiant SET nom=?,email=? WHERE ident=?");
    $requete->execute(array($_GET['nom'],$_GET['email'],$_GET['ident']));
    header("location:acceuil.php");



?>