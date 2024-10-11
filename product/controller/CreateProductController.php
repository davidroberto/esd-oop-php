<?php

require_once 'product/model/entity/Product.php';
require_once 'product/model/repository/ProductRepository.php';
class CreateProductController
{
	public function createProduct()
	{

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$title = $_POST['title'] ?? '';
			$description = $_POST['description'] ?? null;
			$price = floatval($_POST['price']);
			$isActive = isset($_POST['isActive']) ?? null;

			try {
				$product = new Product($title, $description, $price, $isActive);

				$productRepository = new ProductRepository();
				$productRepository->persist($product);

				$successMessage = 'Product created';

			} catch (Exception $e) {
				$errorMessage = $e->getMessage();

			}
		}

		require_once('./product/view/create-product.php');
		
	}
}