<?php

use Twig\Node\Expression\ConditionalExpression;

class_exists('Twig\Node\Expression\ConditionalExpression');

if (\false) {
    class Twig_Node_Expression_Conditional extends ConditionalExpression
    {
    }
}

class_alias('Twig_Node_Expression_Conditional', 'Twig\Node\Expression\ConditionalExpression', false);
