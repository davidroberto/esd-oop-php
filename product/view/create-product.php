<?php require_once('./common/view/partials/header.php'); ?>
<?php require_once('./product/model/entity/Product.php'); ?>
	<main>


		<form method="POST">
			<label for="title">Titre</label>
			<input type="text" id="title"  name="title" required pattern="^[a-zA-Z0-9\s]{<?php echo Product::$MIN_TITLE_LENGTH; ?>,<?php echo Product::$MAX_TITLE_LENGTH; ?>}$">
			<br>

			<label for="description">Description</label>
			<textarea id="description" name="description"></textarea>
			<br>

			<label for="price">Prix</label>
			<input type="number" id="price" step="0.01" name="price" required min="<?php echo Product::$MIN_PRICE; ?>" max="<?php echo  Product::$MAX_PRICE; ?>">
			<br>

			<label for="isActive">Actif</label>
			<input type="checkbox" id="isActive" name="isActive">
			<br>

			<button type="submit">Ajouter</button>

		</form>

		<?php if(isset($errorMessage)): ?>
			<p><?php echo $errorMessage; ?></p>
		<?php endif; ?>

		<?php if(isset($successMessage)): ?>
			<p><?php echo $successMessage; ?></p>
		<?php endif; ?>

	</main>

<?php require_once('./common/view/partials/footer.php'); ?>