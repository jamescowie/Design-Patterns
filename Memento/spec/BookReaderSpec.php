<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookReaderSpec extends ObjectBehavior
{
    function let(\BookMark $bookMark)
    {
        $this->beConstructedWith($bookMark);
    }




}
