<?php

require("connexion.php");
$requete=$connexion->prepare("DELETE FROM etudiant WHERE ident=?");
$requete->execute(array($_GET['ident']));
header("location:acceuil.php");



?>