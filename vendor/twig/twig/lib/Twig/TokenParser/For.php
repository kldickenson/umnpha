<?php

use Twig\TokenParser\ForTokenParser;

class_exists('Twig\TokenParser\ForTokenParser');

if (\false) {
    class Twig_TokenParser_For extends ForTokenParser
    {
    }
}

class_alias('Twig_TokenParser_For', 'Twig\TokenParser\ForTokenParser', false);
