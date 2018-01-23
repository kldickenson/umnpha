<?php

use Twig\Node\MacroNode;

class_exists('Twig\Node\MacroNode');

if (\false) {
    class Twig_Node_Macro extends MacroNode
    {
    }
}

class_alias('Twig_Node_Macro', 'Twig\Node\MacroNode', false);
