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
    <h1>Test connexion base de données : blog2025</h1>
    <?php
        require "connexion.php";
        $req = $bdd->query("SELECT * FROM news");
        while($don = $req->fetch(PDO::FETCH_ASSOC))
        {
            echo "<a href='news.php?id=".$don['id']."' class='news'>";
                echo "<h2>".$don['titre']."</h2>";
                echo "<h4>".$don['date']."</h4>";
            echo "</a>";
        }
        $req->closeCursor();
    ?>
</body>
</html>