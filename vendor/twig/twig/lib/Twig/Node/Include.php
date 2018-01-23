<?php

use Twig\Node\IncludeNode;

class_exists('Twig\Node\IncludeNode');

if (\false) {
    class Twig_Node_Include extends IncludeNode
    {
    }
}

class_alias('Twig_Node_Include', 'Twig\Node\IncludeNode', false);
