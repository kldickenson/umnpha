<?php

use Twig\Node\Expression\Binary\GreaterEqualBinary;

class_exists('Twig\Node\Expression\Binary\GreaterEqualBinary');

if (\false) {
    class Twig_Node_Expression_Binary_GreaterEqual extends GreaterEqualBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_GreaterEqual', 'Twig\Node\Expression\Binary\GreaterEqualBinary', false);
