<?php

use Twig\Node\Expression\Binary\ModBinary;

class_exists('Twig\Node\Expression\Binary\ModBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Mod extends ModBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_Mod', 'Twig\Node\Expression\Binary\ModBinary', false);
