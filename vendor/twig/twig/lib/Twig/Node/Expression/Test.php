<?php

use Twig\Node\Expression\TestExpression;

class_exists('Twig\Node\Expression\TestExpression');

if (\false) {
    class Twig_Node_Expression_Test extends TestExpression
    {
    }
}

class_alias('Twig_Node_Expression_Test', 'Twig\Node\Expression\TestExpression', false);
