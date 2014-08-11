<?php
class upperTemplate extends SanitizerTemplateAbstract
{
    function processContent($content)
    {
        return strtoupper($content);
    }
}