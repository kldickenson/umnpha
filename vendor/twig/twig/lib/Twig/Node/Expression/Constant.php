<?php

use Twig\Node\Expression\ConstantExpression;

class_exists('Twig\Node\Expression\ConstantExpression');

if (\false) {
    class Twig_Node_Expression_Constant extends ConstantExpression
    {
    }
}

class_alias('Twig_Node_Expression_Constant', 'Twig\Node\Expression\ConstantExpression', false);
