<?php

use Twig\TokenParser\ExtendsTokenParser;

class_exists('Twig\TokenParser\ExtendsTokenParser');

if (\false) {
    class Twig_TokenParser_Extends extends ExtendsTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Extends', 'Twig\TokenParser\ExtendsTokenParser', false);
