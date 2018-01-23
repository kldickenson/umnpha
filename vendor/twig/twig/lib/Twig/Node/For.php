<?php

use Twig\Node\ForNode;

class_exists('Twig\Node\ForNode');

if (\false) {
    class Twig_Node_For extends ForNode
    {
    }
}

class_alias('Twig_Node_For', 'Twig\Node\ForNode', false);
