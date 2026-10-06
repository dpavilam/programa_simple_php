<?php

class Product {

    private $name;
    private $price;
    private $category;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function priceWithTax() {
        return $this->price * 1.16;
    }

    public function showInfo() {
        echo "<strong>Producto:</strong> {$this->name}<br>";
        echo "<strong>Categoría:</strong> {$this->category}<br>";
        echo "<strong>Precio base:</strong> $ {$this->price}<br>";
        echo "<strong>Precio con IVA:</strong> $ " . $this->priceWithTax() . "<br><br>";
    }
}

?>
