<?php

require_once 'Category.php';

class Product
{
  // VARIABILI D'ISTANZA
  protected string $title;
  protected int $price;
  protected Category $category;
  protected string $type;

  // COSTRUTTORE
  public function __construct(string $title, int $price, Category $category, string $type)
  {
    $this->title = $title;
    $this->price = $price;
    $this->category = $category;
    $this->type = $type;
  }

  // GETTERS
  public function getTitle(): string
  {
    return $this->title;
  }

  public function getPrice(): int
  {
    return $this->price;
  }

  public function getCategory(): Category
  {
    return $this->category;
  }

  public function getType(): string
  {
    return $this->type;
  }
}
