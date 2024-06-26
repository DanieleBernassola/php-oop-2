<?php

class Category
{
  private string $name;

  // COSTRUTTORE
  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}
