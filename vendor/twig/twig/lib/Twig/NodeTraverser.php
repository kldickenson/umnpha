<?php

use Twig\NodeTraverser;

class_exists('Twig\NodeTraverser');

if (\false) {
    class Twig_NodeTraverser extends NodeTraverser
    {
    }
}

class_alias('Twig_NodeTraverser', 'Twig\NodeTraverser', false);
