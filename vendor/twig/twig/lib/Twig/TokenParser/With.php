<?php

use Twig\TokenParser\WithTokenParser;

class_exists('Twig\TokenParser\WithTokenParser');

if (\false) {
    class Twig_TokenParser_With extends WithTokenParser
    {
    }
}

class_alias('Twig_TokenParser_With', 'Twig\TokenParser\WithTokenParser', false);
