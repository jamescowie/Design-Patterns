<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SanitizerTemplateAbstractSpec extends ObjectBehavior
{
    public function it_should_return_content_back()
    {
        $this->showContent('Testing')->shouldReturn('Testing');
    }
}
