<?php

use Twig\Error\SyntaxError;

class_exists('Twig\Error\SyntaxError');

if (\false) {
    class Twig_Error_Syntax extends SyntaxError
    {
    }
}

class_alias('Twig_Error_Syntax', 'Twig\Error\SyntaxError', false);
