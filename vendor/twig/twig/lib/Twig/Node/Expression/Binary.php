<?php

use Twig\Node\Expression\Binary\AbstractBinary;

class_exists('Twig\Node\Expression\Binary\AbstractBinary');

if (\false) {
    class Twig_Node_Expression_Binary extends AbstractBinary
    {
    }
}

class_alias('Twig_Node_Expression_Binary', 'Twig\Node\Expression\Binary\AbstractBinary', false);
