<?php

use Twig\Node\PrintNode;

class_exists('Twig\Node\PrintNode');

if (\false) {
    class Twig_Node_Print extends PrintNode
    {
    }
}

class_alias('Twig_Node_Print', 'Twig\Node\PrintNode', false);
