<?php

use Twig\Node\Expression\Unary\PosUnary;

class_exists('Twig\Node\Expression\Unary\PosUnary');

if (\false) {
    class Twig_Node_Expression_Unary_Pos extends PosUnary
    {
    }
}

class_alias('Twig_Node_Expression_Unary_Pos', 'Twig\Node\Expression\Unary\PosUnary', false);
