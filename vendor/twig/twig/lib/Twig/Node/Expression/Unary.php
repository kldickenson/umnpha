<?php

use Twig\Node\Expression\Unary\AbstractUnary;

class_exists('Twig\Node\Expression\Unary\AbstractUnary');

if (\false) {
    class Twig_Node_Expression_Unary extends AbstractUnary
    {
    }
}

class_alias('Twig_Node_Expression_Unary', 'Twig\Node\Expression\Unary\AbstractUnary', false);
