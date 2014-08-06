<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Product Name', 'Blue');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Product');
    }

    public function it_should_allow_getting_product_name()
    {
        $this->getName()->shouldReturn('Product Name');
    }

    public function it_should_allow_getting_product_color()
    {
        $this->getColor()->shouldReturn('Blue');
    }
}
