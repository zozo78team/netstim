<section>
	<table class="table">
		<!--Affichage du tableau des produits -->
		<th>Id</th>
		<th>Produit</th>
        <th>Unique</th>
		<?php
            $i = 0;
            foreach($lesProduits as $Produit){ ?>
		<tr>
			<td><?php echo $Produit->getId(); ?></td> <!--Affichage des noms de regions-->
			<td><?php echo $Produit->getNom(); ?></td> <!--Affichage du nombre de visiteur par région-->
			<td>
			    <a href="index.php?controleur=controleur&action=produit&produit=<?php echo $Produit->getId(); ?>">
			        Afficher le produit en détail
		        </a>
			</td> <!--Le lien se trouvant dans l'action pour afficher les détails d'un produit-->
		</tr>
		<?php
		$i++; //Incrémentation pour passé au produit suivant.
		}
        ?>
	</table>
</section>
