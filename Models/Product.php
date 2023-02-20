<?php

class Product
{
    public $price;
    public $description;
    public $name;
    public $image;

    public function __construct($price, $description, $name, $image)
    {
        $this->price = $price;
        $this->description = $description;
        $this->name = $name;
        $this->image = $image;
    }
}
