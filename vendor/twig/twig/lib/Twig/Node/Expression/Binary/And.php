<?php

use Twig\Node\Expression\Binary\AndBinary;

class_exists('Twig\Node\Expression\Binary\AndBinary');

if (\false) {
    class Twig_Node_Expression_Binary_And extends AndBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_And', 'Twig\Node\Expression\Binary\AndBinary', false);
