<?php

use Twig\Node\Expression\FilterExpression;

class_exists('Twig\Node\Expression\FilterExpression');

if (\false) {
    class Twig_Node_Expression_Filter extends FilterExpression
    {
    }
}

class_alias('Twig_Node_Expression_Filter', 'Twig\Node\Expression\FilterExpression', false);
