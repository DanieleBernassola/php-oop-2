<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public function __construct(string $title, int $price, Category $category)
  {
    parent::__construct($title, $price, $category, "Food");
  }
}
