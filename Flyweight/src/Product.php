<?php

class Product
{
    private $productName;
    private $productColor;

    function __construct($productName, $productColor)
    {
        $this->productName = $productName;
        $this->productColor = $productColor;
    }

    public function getName()
    {
        return $this->productName;
    }

    public function getColor()
    {
        return $this->productColor;
    }
}
