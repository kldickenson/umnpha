<?php

use Twig\TokenParser\AbstractTokenParser;

class_exists('Twig\TokenParser\AbstractTokenParser');

if (\false) {
    class Twig_TokenParser extends AbstractTokenParser
    {
    }
}

class_alias('Twig_TokenParser', 'Twig\TokenParser\AbstractTokenParser', false);
