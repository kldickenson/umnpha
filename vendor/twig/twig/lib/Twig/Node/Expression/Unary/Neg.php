<?php

use Twig\Node\Expression\Unary\NegUnary;

class_exists('Twig\Node\Expression\Unary\NegUnary');

if (\false) {
    class Twig_Node_Expression_Unary_Neg extends NegUnary
    {
    }
}

class_alias('Twig_Node_Expression_Unary_Neg', 'Twig\Node\Expression\Unary\NegUnary', false);
