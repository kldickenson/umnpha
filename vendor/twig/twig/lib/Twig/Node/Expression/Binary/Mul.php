<?php

use Twig\Node\Expression\Binary\MulBinary;

class_exists('Twig\Node\Expression\Binary\MulBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Mul extends MulBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Mul', 'Twig\Node\Expression\Binary\MulBinary', false);
