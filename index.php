<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
    require_once("model/class.BDD.php");
    require_once("model/class.produit.php");
?>
<html id="page">
    <head>
        <meta charset="utf-8" />
        <title>NetStim</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
       <meta charset="utf-8" />
        <div id="entete" name="haut" >
            <h1>Exercice netstim</h1>
        </div>
        <div id="contenu" name="centre">

            <?php include_once("vue/Menu.inc.php"); ?>
            <?php
                if(isset($_GET["controleur"])){
                    switch($_GET["controleur"]){ //suivant le contrôleur
                        case 'controleur':
                            include("controleur/controleur.inc.php");  //page de statistique
                            break;
                    }
                }
                else{
                    ?> <h1 id="centre">Bienvenue sur l'exercice de NetStim</h1>
                       <h2 id="centre"><?php include("vue/Menu.inc.php") ?></h2><?php
                }
            ?>
        </div>
        <footer>
        <div id="pied" name="bas">
            <p>Ceci est le pied de page, adresse ... tel : 06 05 23 28 48</p>
        </div>
        </footer>
    </body>
</html>
