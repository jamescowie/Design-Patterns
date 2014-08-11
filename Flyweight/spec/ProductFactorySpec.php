<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Product;
use Prophecy\Argument;

class ProductFactorySpec extends ObjectBehavior
{
    public function it_should_return_product_object_when_a_common_key_is_used()
    {
        $base = $this->getProducts('Product Name');
        $this->getProducts('Product Name')->shouldBeLike($base);
    }

    function it_should_return_a_new_obect_when_new_key_is_used()
    {
        $base = $this->getProducts('First Name');
        $this->getProducts('Second Name')->shouldNotBeLike($base);
    }

}
