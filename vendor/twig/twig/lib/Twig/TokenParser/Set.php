<?php

use Twig\TokenParser\SetTokenParser;

class_exists('Twig\TokenParser\SetTokenParser');

if (\false) {
    class Twig_TokenParser_Set extends SetTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Set', 'Twig\TokenParser\SetTokenParser', false);
