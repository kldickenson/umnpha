<?php

use Twig\Node\Expression\Binary\GreaterBinary;

class_exists('Twig\Node\Expression\Binary\GreaterBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Greater extends GreaterBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Greater', 'Twig\Node\Expression\Binary\GreaterBinary', false);
