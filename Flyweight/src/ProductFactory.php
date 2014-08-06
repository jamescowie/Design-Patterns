<?php

class ProductFactory
{
    private $products = [];

    public function getProducts($name, $color)
    {
        if ( ! array_key_exists($name, $this->products)) {
            $this->products[$name] = new Product($name, $color);
        }

        return $this->products[$name];
    }
}
