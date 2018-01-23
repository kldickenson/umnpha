<?php

use Twig\Node\BlockReferenceNode;

class_exists('Twig\Node\BlockReferenceNode');

if (\false) {
    class Twig_Node_BlockReference extends BlockReferenceNode
    {
    }
}

class_alias('Twig_Node_BlockReference', 'Twig\Node\BlockReferenceNode', false);
