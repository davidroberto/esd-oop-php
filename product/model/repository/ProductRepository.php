<?php

class ProductRepository
{

	public function __construct()
	{

		if (!isset($_SESSION)) {
			session_start();
		}
	}
	public function persist(Product $product): void
	{
		$_SESSION['products'][] = $product;
	}

	public function findAll(): array
	{
		return $_SESSION['products'] ?? [];
	}
}