<?php

use Twig\Node\Expression\Binary\DivBinary;

class_exists('Twig\Node\Expression\Binary\DivBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Div extends DivBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Div', 'Twig\Node\Expression\Binary\DivBinary', false);
