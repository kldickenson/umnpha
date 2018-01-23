<?php

use Twig\Node\BodyNode;

class_exists('Twig\Node\BodyNode');

if (\false) {
    class Twig_Node_Body extends BodyNode
    {
    }
}

class_alias('Twig_Node_Body', 'Twig\Node\BodyNode', false);
