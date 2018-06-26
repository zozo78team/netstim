<section>
	<table class="table">
		<!--Affichage du tableau avec les regions le nombre de visiteurs, le nombre délégué et les actions possible-->
		<th>Id</th>
		<th>Produit</th>
        <th>Prix</th>
        <th>Poids</th>
		<tr>
			<td><?php echo $leProduit['id'] ; ?></td> <!--Affichage du numéro du produit-->
			<td><?php echo $leProduit['nom'] ; ?></td> <!--Affichage du nom du produit-->
			<td><?php echo $leProduit['prix']."€"; ?></td> <!-- Affichage du prix d'un produit en euros-->
			<td><?php echo $leProduit['poids']."Kg"; ?></td> <!-- Affichage du poids d'un produit en kilo-->
		</tr>
	</table>
</section>
