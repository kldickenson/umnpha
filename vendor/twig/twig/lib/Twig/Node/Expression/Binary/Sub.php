<?php

use Twig\Node\Expression\Binary\SubBinary;

class_exists('Twig\Node\Expression\Binary\SubBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Sub extends SubBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Sub', 'Twig\Node\Expression\Binary\SubBinary', false);
