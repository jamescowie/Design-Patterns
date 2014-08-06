<?php
class lowercaseTemplate extends SanitizerTemplateAbstract
{
    function processContent($content)
    {
        return strtolower($content);
    }

}