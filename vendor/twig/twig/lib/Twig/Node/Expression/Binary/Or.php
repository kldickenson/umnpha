<?php

use Twig\Node\Expression\Binary\OrBinary;

class_exists('Twig\Node\Expression\Binary\OrBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Or extends OrBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Or', 'Twig\Node\Expression\Binary\OrBinary', false);
