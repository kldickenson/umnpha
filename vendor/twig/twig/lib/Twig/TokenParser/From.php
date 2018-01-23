<?php

use Twig\TokenParser\FromTokenParser;

class_exists('Twig\TokenParser\FromTokenParser');

if (\false) {
    class Twig_TokenParser_From extends FromTokenParser
    {
    }
}

class_alias('Twig_TokenParser_From', 'Twig\TokenParser\FromTokenParser', false);
