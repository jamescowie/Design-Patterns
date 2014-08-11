<?php
require_once(__DIR__ . "/../vendor/autoload.php");

$factory = new ProductFactory();
$prod1 = $factory->getProducts('James');
$prod2 = $factory->getProducts('James');
$prod3 = $factory->getProducts('Laura');

var_dump($prod1, $prod2, $prod3);