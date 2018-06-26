<section>
    <!-- Permet d'ajouter un nouveau produit -->
    <a href="index.php?controleur=controleur&action=ajout" type="button" class="btn btn-success">Nouveau</a><br><br>

	<table class="table">

		<!--Affichage du tableau avec les regions le nombre de visiteurs, le nombre délégué et les actions possible-->
		<th>Id</th>
		<th>Produit</th>
        <th>Affichage</th>
        <th>Suppression</th>
        <th>Modifier</th>

		<?php
            $i = 0;
            foreach($lesProduits as $Produit){ ?>
		<tr>
			<td><?php echo $Produit->getId(); ?></td> <!--Affichage des noms de regions-->
			<td><?php echo $Produit->getNom(); ?></td> <!--Affichage du nombre de visiteur par région-->
            <!-- Permet l'affichage d'un produit grace à son id -->
			<td>
			    <a href="index.php?controleur=controleur&action=produit&produit=<?php echo $Produit->getId(); ?>" type="button" class="btn btn-info">
			        Afficher le produit en détail
		        </a>
			</td> <!--Permet la suppression d'un produit -->
            <td>
                <a href="index.php?controleur=controleur&action=suppression&produit=<?php echo $Produit->getId(); ?>" type="button" class="btn btn-danger">
			        Supprimer
		        </a>
            </td>
            <!-- Permet la modification d'un produit avec son id -->
            <td>
                <a href="index.php?controleur=controleur&action=modification&produit=<?php echo $Produit->getId(); ?>" type="button" class="btn btn-warning">
			        Modification du produit
		        </a>
            </td>
		</tr>

		<?php
		$i++; //Incrémentation pour passé au produit suivant.
		}
        ?>
	</table>

</section>
