<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
  public function __construct(string $title, int $price, Category $category)
  {
    parent::__construct($title, $price, $category, "Game");
  }
}
