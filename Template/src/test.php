<?php
require_once(__DIR__ . "/../vendor/autoload.php");

$string = 'This is a test';

$string1 = new lowercaseTemplate();
echo $string1->showContent($string) . PHP_EOL;

$string2 = new upperTemplate();
echo $string2->showContent($string);


