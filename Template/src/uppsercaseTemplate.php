<?php
class uppercaseTemplate extends SanitizerTemplateAbstract
{
    function processContent($content)
    {
        return strtoupper($content);
    }

}