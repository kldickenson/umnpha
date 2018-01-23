<?php

use Twig\Node\Expression\NameExpression;

class_exists('Twig\Node\Expression\NameExpression');

if (\false) {
    class Twig_Node_Expression_Name extends NameExpression
    {
    }
}

class_alias('Twig_Node_Expression_Name', 'Twig\Node\Expression\NameExpression', false);
