<?php

abstract class SanitizerTemplateAbstract
{

    public final function showContent($content)
    {
        return $this->processContent($content) . ' -- Page title';
    }

    abstract function processContent($content);
}
