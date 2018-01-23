<?php

use Twig\Node\Expression\Binary\InBinary;

class_exists('Twig\Node\Expression\Binary\InBinary');

if (\false) {
    class Twig_Node_Expression_Binary_In extends InBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_In', 'Twig\Node\Expression\Binary\InBinary', false);
