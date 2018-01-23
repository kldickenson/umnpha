<?php

use Twig\Node\Expression\Binary\AddBinary;

class_exists('Twig\Node\Expression\Binary\AddBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Add extends AddBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Add', 'Twig\Node\Expression\Binary\AddBinary', false);
