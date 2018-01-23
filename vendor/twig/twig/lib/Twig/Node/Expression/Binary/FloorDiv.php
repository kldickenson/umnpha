<?php

use Twig\Node\Expression\Binary\FloorDivBinary;

class_exists('Twig\Node\Expression\Binary\FloorDivBinary');

if (\false) {
    class Twig_Node_Expression_Binary_FloorDiv extends FloorDivBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary_FloorDiv', 'Twig\Node\Expression\Binary\FloorDivBinary', false);
