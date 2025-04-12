<?php

require_once __DIR__ . "/Data/Product.php";

$Product = new Product("Product 1", 100);

echo $Product->getName();
echo $Product->getPrice();

$Dummy = new ProductDummy("Product 2", 200);
$Dummy->info();