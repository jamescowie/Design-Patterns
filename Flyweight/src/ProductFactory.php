<?php

class ProductFactory
{
    private $products = [];

    public function getProducts($name)
    {
        if ( ! array_key_exists($name, $this->products)) {
            $this->products[$name] = new Product($name);
        }

        return $this->products[$name];
    }
}
