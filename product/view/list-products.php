<?php require_once('./common/view/partials/header.php'); ?>
<?php require_once('./product/model/entity/Product.php'); ?>
	<main>


	<h2>Liste des produits : </h2>

	<table>
		<thead>
			<tr>
				<th>Titre</th>
				<th>Description</th>
				<th>Prix</th>
				<th>Actif</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product): ?>
				<tr>
					<td><?php echo $product->getTitle(); ?></td>
					<td><?php echo $product->getDescription(); ?></td>
					<td><?php echo $product->getPrice(); ?></td>
					<td><?php echo $product->isActive() ? 'Oui' : 'Non'; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>

	</main>

<?php require_once('./common/view/partials/footer.php'); ?>