<?php

use Twig\Lexer;

class_exists('Twig\Lexer');

if (\false) {
    class Twig_Lexer extends Lexer
    {
    }
}

class_alias('Twig_Lexer', 'Twig\Lexer', false);
