<?php

use Twig\Node\Expression\Binary\ConcatBinary;

class_exists('Twig\Node\Expression\Binary\ConcatBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Concat extends ConcatBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Concat', 'Twig\Node\Expression\Binary\ConcatBinary', false);
