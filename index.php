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

var_dump($dogCategory);
var_dump($catCategory);
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
</body>

</html>