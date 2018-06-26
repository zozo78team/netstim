<h2 id="centre"> Ajout d'un produit </h2>
    <form action="index.php?controleur=controleur&action=ajouter" method="post" id="centre">
        <input id="nom" name="nom" type="text" placeholder="Nom du produit"><br>
        <input id="prix" name="prix" type="number" step="0.01" placeholder="Prix"><br>
        <input id="poids" name="poids" type="number" step="0.01" placeholder="Poids"><br>
        <input type="submit" class="btn btn-success" value="Ajouter">
    </form>
