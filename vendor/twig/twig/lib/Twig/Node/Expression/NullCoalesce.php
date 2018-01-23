<?php

use Twig\Node\Expression\NullCoalesceExpression;

class_exists('Twig\Node\Expression\NullCoalesceExpression');

if (\false) {
    class Twig_Node_Expression_NullCoalesce extends NullCoalesceExpression
    {
    }
}

class_alias('Twig_Node_Expression_NullCoalesce', 'Twig\Node\Expression\NullCoalesceExpression', false);
