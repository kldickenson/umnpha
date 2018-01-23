<?php

use Twig\Node\Expression\Binary\EqualBinary;

class_exists('Twig\Node\Expression\Binary\EqualBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Equal extends EqualBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Equal', 'Twig\Node\Expression\Binary\EqualBinary', false);
