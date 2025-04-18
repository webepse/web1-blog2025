<?php

// m'assurer que je viens du fichier add.php

if(isset($_POST['titre']))
{
    // traiter les données
    // init $err à 0
    $err = 0;

    if(empty($_POST['titre']))
    {
        $err = 1;
    }else{
        $titre = htmlspecialchars($_POST['titre']);
    }

    if(empty($_POST['contenu']))
    {
        $err = 2;
    }else{
        $contenu = htmlspecialchars($_POST['contenu']);
    }

    if(empty($_POST['date']))
    {
        $err = 3;
    }else{
        $date = htmlspecialchars($_POST['date']);
    }

    if(empty($_POST['cover']))
    {
        $err = 4;
    }else{
        $cover = htmlspecialchars($_POST['cover']);
    }

    if($err == 0)
    {
        // insertion dans la bdd
        // connexion à la bdd
        require "connexion.php";
        $req = $bdd->prepare("INSERT INTO news(titre,contenu,date,cover) VALUES(?,?,?,?)");
        $req->execute([$titre,$contenu,$date,$cover]);
        header("LOCATION:index.php?insert=valid");


    }else{
        // redirection en cas d'erreur
        header("LOCATION:add.php?error=".$err);
        exit();
    }

}
else{
    // redirection en cas de non venue du formulaire
    header("LOCATION:index.php");
    exit();
}