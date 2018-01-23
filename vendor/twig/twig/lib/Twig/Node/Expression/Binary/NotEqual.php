<?php

use Twig\Node\Expression\Binary\NotEqualBinary;

class_exists('Twig\Node\Expression\Binary\NotEqualBinary');

if (\false) {
    class Twig_Node_Expression_Binary_NotEqual extends NotEqualBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_NotEqual', 'Twig\Node\Expression\Binary\NotEqualBinary', false);
