<?php
    if(!isset($_GET["action"])) //Si aucune action n'a été demander, alors on affiche la page d'acceuil des statistiques
    {

    }
    else
    {
        switch($_GET["action"]) //suivant l'action à réaliser,
        {
            //Affichage de la page d'accueil avec la requête pour récupérer l'ensemble des produits
            case 'accueil':
				$lesProduits = Produit::allProduit();
                include("vue/Accueil.inc.php");
				break;

            //Affichage d'un seul produit avec l'ensemble de ces carractéristiquesS
            case 'produit':
                $idPdt = $_GET['produit'];
                $leProduit = Produit::unProduit($idPdt);
                include("vue/Produit.inc.php");
                break;

            //Affichage de la page d'administration qui permet tout les droits avec tout les produits pour pouvoir les modifier
            case 'administration':
                $lesProduits = Produit::allProduit();
                include("vue/Administration.inc.php");
                break;

            //Permet l'ajout d'un nouveau produit avec une page pour compléter les informations du produit
            case 'ajout':
                include("vue/Nouveau.inc.php");
                break;

            //Permett de faire la requête pour ajouter un produit dans la base de donnée.
            case 'ajouter':
                $nom = $_POST['nom'];
                $prix = $_POST['prix'];
                $poids = $_POST['poids'];
                Produit::ajtProduit( $prix, $poids, $nom);

            //Affichage de la page d'administration qui permet tout les droits avec tout les produits pour pouvoir les modifier
            case 'administration':
                $lesProduits = Produit::allProduit();
                include("vue/Administration.inc.php");
                break;

            case 'suppression':
                $id = !empty($_GET['produit'])? $_GET['produit'] : "";
                Produit::supprProduit($id);
                $lesProduits = Produit::allProduit();
                include("vue/Administration.inc.php");
                break;

            case 'modification':
                $id = !empty($_GET['produit'])? $_GET['produit'] : "";
                $leProduit = Produit::unProduit($id);
                include("vue/Modification.inc.php");
                break;

            case 'modifier':
                $id = !empty($_GET['produit'])? $_GET['produit'] : "";
                $poids = $_POST['poids'];
                $prix = $_POST['prix'];
                $nom = $_POST['nom'];
                Produit::modifProduit($id, $nom, $prix, $poids);
                $lesProduits = Produit::allProduit();
                include("vue/Administration.inc.php");
                break;
        }
    }
?>
