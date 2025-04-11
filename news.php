<?php
    // j'ai besoin de l'id (en GET) pour fonctionner
    // savoir si GET['id'] existe => isset
    if(isset($_GET['id']))
    {
        // protèger la valeur de id pcq ça vient de l'extérieur (URL)
        $id = htmlspecialchars($_GET['id']);
    }else{
        // redirection vers index.php car il n'y a pas de GET['id']
        header("LOCATION:index.php");
        exit();
    }

    // connexion à la bdd
    require "connexion.php";

    // req à la bdd mais avec une inconnue (qui? id)
    $req = $bdd->prepare("SELECT * FROM news WHERE id=?");
    $req->execute([$id]);
    $don = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("partials/header.php");
    ?>
    <?php
        echo "<h2>".$don['titre']."</h2>";
    ?>
    <!-- mode plus simple d'écriture (echo) avec raccourci -->
    <h2><?= $don['titre'] ?></h2>
    <h4><?= $don['date'] ?></h4>
    <div>
        <?= nl2br($don['contenu']) ?>
    </div>
</body>
</html>