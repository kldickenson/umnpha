<?php

use Twig\Node\BlockNode;

class_exists('Twig\Node\BlockNode');

if (\false) {
    class Twig_Node_Block extends BlockNode
    {
    }
}

class_alias('Twig_Node_Block', 'Twig\Node\BlockNode', false);
