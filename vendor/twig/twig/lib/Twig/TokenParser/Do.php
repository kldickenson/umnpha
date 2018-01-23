<?php

use Twig\TokenParser\DoTokenParser;

class_exists('Twig\TokenParser\DoTokenParser');

if (\false) {
    class Twig_TokenParser_Do extends DoTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Do', 'Twig\TokenParser\DoTokenParser', false);
