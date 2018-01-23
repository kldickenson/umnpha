<?php

use Twig\Node\WithNode;

class_exists('Twig\Node\WithNode');

if (\false) {
    class Twig_Node_With extends WithNode
    {
    }
}

class_alias('Twig_Node_With', 'Twig\Node\WithNode', false);
