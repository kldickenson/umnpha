<?php

use Twig\Node\IfNode;

class_exists('Twig\Node\IfNode');

if (\false) {
    class Twig_Node_If extends IfNode
    {
    }
}

class_alias('Twig_Node_If', 'Twig\Node\IfNode', false);
