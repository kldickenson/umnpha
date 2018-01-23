<?php

use Twig\Node\Expression\Binary\BitwiseAndBinary;

class_exists('Twig\Node\Expression\Binary\BitwiseAndBinary');

if (\false) {
    class Twig_Node_Expression_Binary_BitwiseAnd extends BitwiseAndBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_BitwiseAnd', 'Twig\Node\Expression\Binary\BitwiseAndBinary', false);
