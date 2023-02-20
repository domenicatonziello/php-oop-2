<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Categoria.php';

class Cibo extends Product
{
    public $scadenza;
    public $peso;

    public function __construct($price, $description, $name, $image, Category $category, $scadenza, $peso)
    {
        parent::__construct($price, $description, $name, $image, $category);
        $this->scadenza = $scadenza;
        $this->peso = $peso;
    }
}
