<?php

class Product
{
    private $productName;

    function __construct($productName)
    {
        $this->productName = $productName;
    }

    public function getName()
    {
        return $this->productName;
    }

}
