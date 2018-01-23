<?php

use Twig\Node\Expression\BlockReferenceExpression;

class_exists('Twig\Node\Expression\BlockReferenceExpression');

if (\false) {
    class Twig_Node_Expression_BlockReference extends BlockReferenceExpression
    {
    }
}

class_alias('Twig_Node_Expression_BlockReference', 'Twig\Node\Expression\BlockReferenceExpression', false);
