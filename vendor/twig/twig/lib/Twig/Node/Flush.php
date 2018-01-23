<?php

use Twig\Node\FlushNode;

class_exists('Twig\Node\FlushNode');

if (\false) {
    class Twig_Node_Flush extends FlushNode
    {
    }
}

class_alias('Twig_Node_Flush', 'Twig\Node\FlushNode', false);
