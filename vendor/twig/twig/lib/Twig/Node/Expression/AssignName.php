<?php

use Twig\Node\Expression\AssignNameExpression;

class_exists('Twig\Node\Expression\AssignNameExpression');

if (\false) {
    class Twig_Node_Expression_AssignName extends AssignNameExpression
    {
    }
}

class_alias('Twig_Node_Expression_AssignName', 'Twig\Node\Expression\AssignNameExpression', false);
