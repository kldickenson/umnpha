<?php

use Twig\Node\TextNode;

class_exists('Twig\Node\TextNode');

if (\false) {
    class Twig_Node_Text extends TextNode
    {
    }
}

class_alias('Twig_Node_Text', 'Twig\Node\TextNode', false);
