<?php

class Product {


	public static $MIN_TITLE_LENGTH = 3;
	public static $MAX_TITLE_LENGTH = 100;
	public static $MIN_PRICE = 1;
	public static $MAX_PRICE = 500;
	public static $DEFAUT_PRICE = 2;

	private string $id;

	private string $title;

	private ?string $description;

	private float $price;

	private bool $isActive;



	public function __construct(string $title, ?string $description, ?float $price, ?bool $isActive) {



		if (empty($title)) {
			throw new Exception('Title cannot be empty');
		}


		if (strlen($title) < Product::$MIN_TITLE_LENGTH || strlen($title) > Product::$MAX_TITLE_LENGTH) {
			throw new Exception('Title must be between' . Product::$MIN_TITLE_LENGTH .' and ' . Product::$MAX_TITLE_LENGTH . 'characters');
		}

		if (empty($price)) {
			$price = Product::$DEFAUT_PRICE;
		}

		if (($price < Product::$MIN_PRICE) || ($price > Product::$MAX_PRICE) ) {
			throw new Exception('Price must be between '. Product::$MIN_PRICE .' and ' . Product::$MAX_PRICE);
		}


		$this->id = uniqid();
		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
		$this->isActive = $isActive ?? false;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function getDescription(): ?string {
		return $this->description;
	}

	public function getPrice(): float {
		return $this->price;
	}

	public function isActive(): bool {
		return $this->isActive;
	}


}