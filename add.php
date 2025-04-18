<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['error']))
        {
            echo "<div>Une erreur est survenue (code erreur:".$_GET['error']." )</div>";
        }
    ?>

    <form action="traitement.php" method="POST">
        <div class="form-group">
            <label for="titre">Titre: </label>
            <input type="text" id="titre" name="titre">
        </div>
        <div class="form-group">
            <label for="contenu">Contenu: </label>
            <textarea name="contenu" id="contenu"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date: </label>
            <input type="date" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="cover">Cover: </label>
            <input type="text" name="cover" id="cover">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>