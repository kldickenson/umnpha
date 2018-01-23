<?php

use Twig\Node\Expression\CallExpression;

class_exists('Twig\Node\Expression\CallExpression');

if (\false) {
    class Twig_Node_Expression_Call extends CallExpression
    {
    }
}

class_alias('Twig_Node_Expression_Call', 'Twig\Node\Expression\CallExpression', false);
