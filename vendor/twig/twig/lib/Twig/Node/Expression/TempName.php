<?php

use Twig\Node\Expression\TempNameExpression;

class_exists('Twig\Node\Expression\TempNameExpression');

if (\false) {
    class Twig_Node_Expression_TempName extends TempNameExpression
    {
    }
}

class_alias('Twig_Node_Expression_TempName', 'Twig\Node\Expression\TempNameExpression', false);
