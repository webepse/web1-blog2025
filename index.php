<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //permet d'inclure un fichier dans un autre
        include("partials/header.php");
    ?>
    <h1>Test connexion base de données : blog2025</h1>
    <?php
        // L'expression require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois. 
        //    require_once "connexion.php";
        require "connexion.php";
        $req = $bdd->query("SELECT * FROM news");
        $don = $req->fetch();
        var_dump($don);
        $don2 = $req->fetch();
        var_dump($don2);
        $don3 = $req->fetch();
        var_dump($don3);
        $don4 = $req->fetch();
        var_dump($don4);
        var_dump($req);
        $req->closeCursor();
    ?>
</body>
</html>