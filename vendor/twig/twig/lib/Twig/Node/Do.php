<?php

use Twig\Node\DoNode;

class_exists('Twig\Node\DoNode');

if (\false) {
    class Twig_Node_Do extends DoNode
    {
    }
}

class_alias('Twig_Node_Do', 'Twig\Node\DoNode', false);
