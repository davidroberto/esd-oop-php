<?php

class ListProductsController {

	public function listProducts(): void {

		$productRepository = new ProductRepository();
		$products = $productRepository->findAll();

		require_once('./product/view/list-products.php');
	}

}