<?php

use Twig\TokenParser\IfTokenParser;

class_exists('Twig\TokenParser\IfTokenParser');

if (\false) {
    class Twig_TokenParser_If extends IfTokenParser
    {
    }
}

class_alias('Twig_TokenParser_If', 'Twig\TokenParser\IfTokenParser', false);
