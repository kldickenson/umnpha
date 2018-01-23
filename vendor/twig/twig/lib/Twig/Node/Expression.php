<?php

use Twig\Node\Expression\AbstractExpression;

class_exists('Twig\Node\Expression\AbstractExpression');

if (\false) {
    class Twig_Node_Expression extends AbstractExpression
    {
    }
}

class_alias('Twig_Node_Expression', 'Twig\Node\Expression\AbstractExpression', false);
