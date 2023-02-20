<?php
require_once __DIR__ . '/Categoria.php';
class Product
{
    public $price;
    public $description;
    public $name;
    public $image;
    public $category;

    public function __construct($price, $description, $name, $image, Category $category)
    {
        $this->price = $price;
        $this->description = $description;
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
    }

    public function getPrice($price)
    {
        return $this->price . '€';
    }
}
