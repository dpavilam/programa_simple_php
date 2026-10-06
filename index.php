<?php

require_once("Product.php");

$product1 = new Product("Laptop Lenovo", 15000, "Tecnología");
$product2 = new Product("Silla ergonómica", 3200, "Muebles");
$product3 = new Product("Café de grano", 180, "Alimentos");

$product1->showInfo();
$product2->showInfo();
$product3->showInfo();

?>
