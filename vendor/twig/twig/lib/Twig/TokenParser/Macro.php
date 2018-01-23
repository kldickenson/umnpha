<?php

use Twig\TokenParser\MacroTokenParser;

class_exists('Twig\TokenParser\MacroTokenParser');

if (\false) {
    class Twig_TokenParser_Macro extends MacroTokenParser
    {
    }
}

class_alias('Twig_TokenParser_Macro', 'Twig\TokenParser\MacroTokenParser', false);
