<?php

use Twig\Node\Expression\ParentExpression;

class_exists('Twig\Node\Expression\ParentExpression');

if (\false) {
    class Twig_Node_Expression_Parent extends ParentExpression
    {
    }
}

class_alias('Twig_Node_Expression_Parent', 'Twig\Node\Expression\ParentExpression', false);
