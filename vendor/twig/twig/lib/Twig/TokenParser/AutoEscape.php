<?php

use Twig\TokenParser\AutoEscapeTokenParser;

class_exists('Twig\TokenParser\AutoEscapeTokenParser');

if (\false) {
    class Twig_TokenParser_AutoEscape extends AutoEscapeTokenParser
    {
    }
}

class_alias('Twig_TokenParser_AutoEscape', 'Twig\TokenParser\AutoEscapeTokenParser', false);
