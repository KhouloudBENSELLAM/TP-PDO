<?php

    require("connexion.php");
    $id=$_GET['ident'];
    $nom=$_GET['nom'];
    $email=$_GET['email'];


    $requeteInsertion=$connexion->prepare("INSERT INTO etudiant values(?,?,?)");
    $requeteInsertion->execute(array($id,$nom,$email));

    // header("location:acceuil.php");



?>