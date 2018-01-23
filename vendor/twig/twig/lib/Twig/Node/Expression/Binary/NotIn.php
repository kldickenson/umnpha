<?php

use Twig\Node\Expression\Binary\NotInBinary;

class_exists('Twig\Node\Expression\Binary\NotInBinary');

if (\false) {
    class Twig_Node_Expression_Binary_NotIn extends NotInBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_NotIn', 'Twig\Node\Expression\Binary\NotInBinary', false);
