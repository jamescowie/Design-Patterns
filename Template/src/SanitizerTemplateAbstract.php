<?php

abstract class SanitizerTemplateAbstract
{

    public final function showContent($content)
    {
        return $this->processContent($content);
    }

    abstract function processContent($content);
}
