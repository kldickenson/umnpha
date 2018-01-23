<?php

use Twig\TokenParser\FilterTokenParser;

class_exists('Twig\TokenParser\FilterTokenParser');

if (\false) {
    class Twig_TokenParser_Filter extends FilterTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Filter', 'Twig\TokenParser\FilterTokenParser', false);
