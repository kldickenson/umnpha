<?php

use Twig\Node\Expression\MethodCallExpression;

class_exists('Twig\Node\Expression\MethodCallExpression');

if (\false) {
    class Twig_Node_Expression_MethodCall extends MethodCallExpression
    {
    }
}

class_alias('Twig_Node_Expression_MethodCall', 'Twig\Node\Expression\MethodCallExpression', false);
