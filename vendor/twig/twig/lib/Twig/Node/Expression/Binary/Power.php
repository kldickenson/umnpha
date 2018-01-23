<?php

use Twig\Node\Expression\Binary\PowerBinary;

class_exists('Twig\Node\Expression\Binary\PowerBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Power extends PowerBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Power', 'Twig\Node\Expression\Binary\PowerBinary', false);
