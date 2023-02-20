<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Categoria.php';

$dog = new Category('Dog', 'icon');
$cat = new Category('Cat', 'icon');
$crocchette = new Cibo('10£', 'crocchette per cani di taglia grande', 'crocchette', 'img', $dog, '11/02/2024', '5kg');
var_dump($crocchette);
