<?php

// INCLUSIONE CLASSI
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';

// CREAZIONE CATEGORIE
$dogCategory = new Category("Cani");
$catCategory = new Category("Gatti");

// CREAZIONE PRODOTTI
$products = [
  new Food("Croccantini per cani", 20, $dogCategory),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Shop</title>
</head>

<body>
  <h1>Shop</h1>
  <!-- LISTA PRODOTTI -->
  <ul>
    <?php foreach ($products as $product) : ?>
      <li>
        <!-- NOME PRODOTTO -->
        <h2><?= $product->getTitle(); ?></h2>
        <!-- PREZZO -->
        <p>Prezzo: <?= $product->getPrice(); ?>€</p>
        <!-- CATEGORIA -->
        <p>Categoria: <?= $product->getCategory()->getName(); ?></p>
        <!-- TIPO -->
        <p>Tipo: <?= $product->getType(); ?></p>
      <?php endforeach; ?>
      </li>
  </ul>
</body>

</html>