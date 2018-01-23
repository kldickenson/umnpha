<?php

use Twig\Node\Expression\FunctionExpression;

class_exists('Twig\Node\Expression\FunctionExpression');

if (\false) {
    class Twig_Node_Expression_Function extends FunctionExpression
    {
    }
}

class_alias('Twig_Node_Expression_Function', 'Twig\Node\Expression\FunctionExpression', false);
