<?php

use Twig\Node\Expression\Unary\NotUnary;

class_exists('Twig\Node\Expression\Unary\NotUnary');

if (\false) {
    class Twig_Node_Expression_Unary_Not extends NotUnary
    {
    }
}

class_alias('Twig_Node_Expression_Unary_Not', 'Twig\Node\Expression\Unary\NotUnary', false);
