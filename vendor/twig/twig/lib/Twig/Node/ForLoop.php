<?php

use Twig\Node\ForLoopNode;

class_exists('Twig\Node\ForLoopNode');

if (\false) {
    class Twig_Node_ForLoop extends ForLoopNode
    {
    }
}

class_alias('Twig_Node_ForLoop', 'Twig\Node\ForLoopNode', false);
