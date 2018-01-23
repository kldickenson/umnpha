<?php

use Twig\ExpressionParser;

class_exists('Twig\ExpressionParser');

if (\false) {
    class Twig_ExpressionParser extends ExpressionParser
    {
    }
}

class_alias('Twig_ExpressionParser', 'Twig\ExpressionParser', false);
