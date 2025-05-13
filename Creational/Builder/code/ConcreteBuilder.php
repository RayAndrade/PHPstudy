<?php
require_once 'Builder.php';
require_once 'Product.php';
class ConcreteBuilder implements Builder
{
    private Product $product;
    public function __construct() {
        $this->product = new Product();
    }
    public function buildPartA(): void
    {
        $this->product->add("PartA");
    }

    public function buildPartB(): void
    {
        $this->product->add("PartB");
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}