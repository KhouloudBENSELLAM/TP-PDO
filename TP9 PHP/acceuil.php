<?php
    require("connexion.php");
    $requete=$connexion->prepare("SELECT * FROM etudiant");
    $requete->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: aqua;
        }
        form {
            background-color: white;
            width: 37%;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Créer un étudient</h1>
    <form action="creerEtudiant.php" method="get">
        ID: <br>
        <input type="number" name="ident" ><br>
        Nom: <br>
        <input type="text" name="nom"><br>
        Email: <br>
        <input type="email" name="email" ><br>
        <br>
        <br>
        <input type="submit" value="Créer un étudiant" name="btn">
    </form>
        <br>
        <table width="100%" border="1" rules="all">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>
        <?php   while($ligne=$requete->fetch()){?>
            <tr>
                <td><?php echo $ligne['ident'];    ?></td>
                <td><?php echo $ligne['nom'];    ?></td>
                <td><?php echo $ligne['email'];    ?></td>
                <td>
                <a onclick="return confirm('Are you sure?!')" href="supprimerAction.php?ident=<?php echo $ligne['ident'];  ?>">Delete</a></td>
                <a href="modifier.php?ident=<?php echo $ligne['ident'];  ?>">Edit</a>
                </td>
            </tr>
        <?php  } ?>
    </table>
</body>
</html>