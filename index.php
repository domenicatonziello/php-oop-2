<?php
require_once __DIR__ . '/Models/Product.php';

$dog = new Product('10£', 'palla morbida per giocare', 'palla', 'img');
$cat = new Product('5£', 'palla morbida', 'palla', 'img');

var_dump($dog);
var_dump($cat);
