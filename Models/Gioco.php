<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Categoria.php';

class Gioco extends Product
{
    public $materiale;

    public function __construct($price, $description, $name, $image, Category $category, $materiale)
    {
        parent::__construct($price, $description, $name, $image, $category);
        $this->materiale = $materiale;
    }
}
