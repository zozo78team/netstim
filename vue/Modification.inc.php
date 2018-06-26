<h2 id="centre"> Modification d'un produit </h2>
    <form action="index.php?controleur=controleur&action=modifier&produit=<?php echo $leProduit['id'] ?>" method="post" id="centre">
        <input id="nom" name="nom" type="text" placeholder="Nom du produit" value="<?php echo $leProduit['nom'] ?>"><br>
        <input id="prix" name="prix" type="number" step="0.01" placeholder="Prix" value="<?php echo $leProduit['prix'] ?>"><br>
        <input id="poids" name="poids" type="number" step="0.01" placeholder="Poids" value="<?php echo $leProduit['poids'] ?>"><br>
        <input type="submit" class="btn btn-success" value="Modifier">
    </form>
